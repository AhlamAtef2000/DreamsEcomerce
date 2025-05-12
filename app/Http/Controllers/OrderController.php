<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\CartItem;
use App\Models\Cart;
use App\Models\OrderItem;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use App\Models\shipment;
use App\Models\ShippingMethod;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get the authenticated user's orders
        $orders = Auth::user()->orders()->paginate(10);

        return view('frontend.orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->user_id = Auth::user()->id;

        $validated = $request->validate([
            'country' => 'required|string',
            'first_name' => 'required|regex:/^[a-zA-Z\s]+$/', // Only letters and spaces
            'last_name' => 'required|regex:/^[a-zA-Z\s]+$/',  // Only letters and spaces
            'address' => 'required|string',
            'town_city' => 'required|string',
            'state_county' => 'required|string',
            'phone' => 'required|string|regex:/^(\+962|962)?(7[7-9][0-9]{7})$/',
            'email' => 'required|email',
            'phone' => 'required|string|regex:/^[0-9]{10}$/',  // Example regex for 10-digit phone numbers
            'payment_method' => 'required|in:bank,cheque,paypal,cod',
            'shipping_method_id' => 'required|exists:shipping_methods,id',  // Assuming shipping methods are stored in a `shipping_methods` table
        ]);



        $user = auth()->user();

        // Get the cart for the authenticated user
        $cart = Cart::where('user_id', $user->id)->first();

        if (!$cart) {
            return back()->with('error', 'Cart not found for the user.');
        }

        // Get cart items using cart_id
        $cartItems = CartItem::where('cart_id', $cart->id)->with('product')->get();

        if ($cartItems->isEmpty()) {
            return back()->with('error', 'Your cart is empty.');
        }

        DB::beginTransaction();

        try {


            // Create the order
            $order = Order::create([
                'user_id' => $user->id,
                'total_price' => $request->total_price,
                'status' => 'pending',
                'shipping_address' => $request->address,
                'country' => $request->country,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'address' => $request->address,
                'apartment' => $request->apartment,
                'town_city' => $request->town_city,
                'state_county' => $request->state_county,
                'postcode_zip' => $request->postcode_zip,
                'email' => $request->email,
                'phone' => $request->phone,
                'payment_method' => $request->payment_method,
                'order_notes' => $request->input('order_notes'),
                'shipping_method_id' => $request->shipping_method_id,
            ]);

            // Create order items
            foreach ($cartItems as $item) {
                OrderItem::create([
                    'order_id' => $order->id,
                    'product_id' => $item->product_id,
                    'quantity' => $item->quantity,
                    'price' => $item->product->price,
                    'size_id' => $item->size_id,
                    'color_id' => $item->color_id,
                    'material_id' => $item->material_id,
                ]);
            }

            // Clear the cart
            CartItem::where('cart_id', $cart->id)->delete();
            $shippmentMethod=ShippingMethod::find($request->shipping_method_id);
            if ($shippmentMethod) {
                $shippmentMethodCost = $shippmentMethod->price;
            }

           
            shipment::create([
                'order_id' => $order->id,
                'shipping_address' => $request->address,
                'shipping_method' => $shippmentMethod->name,
                'shipping_cost' => $shippmentMethodCost ?? 0,
                'tracking_number' => AdminOrderController::generateTrackingNumber(),
                'shipment_status' => 'pending',
            ]);
            

            // Clear the coupon session after order is placed
            session()->forget(['coupon', 'discounted_total']);

            DB::commit();

            return redirect()->route('user.checkout')->with('success', 'Order placed successfully!');
        } catch (\Exception $e) {

            DB::rollBack();
            return back()->with('error', 'Something went wrong. Please try again.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        
        // Ensure the authenticated user only sees their own orders
        if ($order->user_id !== Auth::id()) {
            return redirect()->route('user.orders.index')->with('error', 'Unauthorized access.');
        }

        // Load the items related to this order along with product's color, size, and material
        $order=$order->load('items.product.colors', 'items.product.sizes', 'items.product.materials', 'shipment');
        // Return the view with the order data
        return view('frontend.orders.show', compact('order'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
