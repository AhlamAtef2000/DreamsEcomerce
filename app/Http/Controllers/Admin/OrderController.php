<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use App\Models\Shipment;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('user')->paginate(10);

        // Pass the orders to the view
        return view('admin.orders.index', compact('orders'));
    }


    public function edit(Order $order)
    {
        $users=User::all();
        return view('admin.orders.edit', compact('order','users'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:pending,shipped,delivered,cancelled',
        ]);

        $order = Order::findOrFail($id);
        $order->status = $request->status;
        $order->save();

        if (in_array($request->status, ['shipped', 'delivered'])) {
            $shipment = Shipment::firstOrNew(['order_id' => $order->id]);

            $shipment->shipping_address = $order->shipping_address;
            $shipment->shipping_method = $request->shipping_method ?? 'standard';
            $shipment->shipping_cost = $request->shipping_cost ?? 0;

            // Generate tracking number only once
            if (!$shipment->tracking_number) {
                $shipment->tracking_number = $this->generateTrackingNumber();
            }

            if ($request->status === 'shipped') {
                $shipment->shipment_status = 'shipped';
                $shipment->shipped_at = Carbon::now();
            }

            if ($request->status === 'delivered') {
                $shipment->shipment_status = 'delivered';
                $shipment->delivered_at = Carbon::now();

                if (!$shipment->shipped_at) {
                    $shipment->shipped_at = Carbon::now()->subDays(2);
                }
            }

            $shipment->save();
        }

        return redirect()->route('admin.orders.index')->with('success', 'Order and shipment updated successfully.');

    }

    private function generateTrackingNumber()
    {
        do {
            $trackingNumber = strtoupper(Str::random(10));
        } while (Shipment::where('tracking_number', $trackingNumber)->exists());

        return $trackingNumber;
    }

}
