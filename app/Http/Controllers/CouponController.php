<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CartItem;
use App\Models\Cart;

class CouponController extends Controller
{

    public function index()
    {
        $coupons = Coupon::all();
        return view('admin.coupons.index', compact('coupons'));
    }

    // Show form to create a new coupon
    public function create()
    {
        return view('admin.coupons.create');
    }

    // Store a new coupon
    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required|unique:coupons,code',
            'discount_type' => 'required|in:fixed,percentage',
            'amount' => 'required|numeric|min:0.01',
            'valid_until'=>' required|date',
            'valid_from' => 'required|date'
        ]);

        Coupon::create([
            'code' => $request->code,
            'discount_type' => $request->discount_type,
            'amount' => $request->amount,
            'valid_until'=> $request->valid_until,
            'valid_from' => $request->valid_from,

        ]);

        return redirect()->route('admin.coupons.index')->with('success', 'Coupon created successfully!');
    }

    // Show form to edit a coupon
    public function edit($id)
    {
        $coupon = Coupon::findOrFail($id);
        return view('admin.coupons.edit', compact('coupon'));
    }

    // Update an existing coupon
    public function update(Request $request, $id)
    {
        $request->validate([
            'code' => 'required|unique:coupons,code,' . $id,
            'discount_type' => 'required|in:fixed,percentage',
            'amount' => 'required|numeric|min:0.01',
            'valid_until'=>' required|date',
            'valid_from' => 'required|date'

        ]);

        $coupon = Coupon::findOrFail($id);
        $coupon->update([
            'code' => $request->code,
            'discount_type' => $request->discount_type,
            'amount' => $request->amount,
            'valid_until'=> $request->valid_until,
            'valid_from' => $request->valid_from,

        ]);

        return redirect()->route('admin.coupons.index')->with('success', 'Coupon updated successfully!');
    }

    // Delete a coupon
    public function applyCoupon(Request $request)
    {
        $request->validate([
            'coupon_code' => 'required|string',
            'subtotal' => 'required|numeric',
        ]);

        $coupon = Coupon::where('code', $request->coupon_code)
            ->whereDate('valid_from', '<=', now())
            ->whereDate('valid_until', '>=', now())
            ->first();

        if (!$coupon) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid or expired coupon code.'
            ]);
        }

        // Calculate the discount
        $discount = 0;
        if ($coupon->discount_type === 'percentage') {
            $discount = $request->subtotal * ($coupon->amount / 100);
        } else {
            $discount = $coupon->amount;
        }

        // Save to session
        session([
            'coupon' => [
                'code' => $coupon->code,
                'discount_type' => $coupon->discount_type,
                'amount' => $coupon->amount,
            ]
        ]);

        $newTotal = $request->subtotal - $discount;

        return response()->json([
            'success' => true,
            'message' => 'Coupon applied successfully!',
            'coupon' => [
                'code' => $coupon->code,
                'amount' => $discount,
            ],
            'discountAmount' => $discount,
            'newTotal' => $newTotal,
        ]);
    }


    public function remove()
    {
        session()->forget('coupon');

        return response()->json([
            'success' => true,
            'message' => 'Coupon removed successfully.'
        ]);
    }



}
