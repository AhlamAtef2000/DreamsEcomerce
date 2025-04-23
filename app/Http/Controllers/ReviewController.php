<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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

        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|string',
            'product_id' => 'required|exists:products,id',
        ]);

        $user = auth()->user();

        // تحقق إذا كان المستخدم قد طلب هذا المنتج
        $hasDeliveredOrder = \DB::table('orders')
            ->join('order_items', 'orders.id', '=', 'order_items.order_id')
            ->where('orders.user_id', $user->id)
            ->where('orders.status', 'delivered')
            ->where('order_items.product_id', $request->product_id)
            ->exists();

        if (!$hasDeliveredOrder) {
            return back()->with('error', 'You can only review products you have received.');
        }

        // تحقق إذا كان المستخدم قد قام بالتقييم مسبقًا
        $alreadyReviewed = Review::where('user_id', $user->id)
            ->where('product_id', $request->product_id)
            ->exists();

        if ($alreadyReviewed) {
            return back()->with('error', 'You have already reviewed this product.');
        }

        // حفظ التقييم
        Review::create([
            'user_id' => $user->id,
            'product_id' => $request->product_id,
            'rating' => $request->rating,
            'comment' => $request->comment,
        ]);

        return back()->with('success', 'Thanks for your review!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $review = Review::with('product')->where('id', $id)
            ->where('user_id', auth()->id())
            ->firstOrFail();

        $product = Product::with(['category', 'sizes', 'colors', 'images', 'materials', 'reviews'])
            ->withoutTrashed()
            ->findOrFail($review->product_id);

            $hasDeliveredOrder = \DB::table('orders')
            ->join('order_items', 'orders.id', '=', 'order_items.order_id')
            ->where('orders.user_id', Auth::user()->id)
            ->where('orders.status', 'delivered')
            ->where('order_items.product_id', $product->id)
            ->exists();
        return view('frontend.product.show', [
            'product' => $product,
            'review' => $review,
            'isEditing' => true,
            'hasDeliveredOrder'=>$hasDeliveredOrder
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {


        $review = Review::where('id', $id)
            ->where('user_id', auth()->id()) // make sure the user owns the review
            ->firstOrFail();

        $request->validate([
            'rating' => 'required|integer|min:1|max:10',
            'comment' => 'required|string|max:1000',
        ]);

        $review->update([
            'rating' => $request->input('rating'),
            'comment' => $request->input('comment'),
        ]);

        $product = Product::with(['category', 'sizes', 'colors', 'images', 'materials', 'reviews'])
        ->withoutTrashed()
        ->findOrFail($review->product_id);

        return redirect()
    ->route('user.single-product', ['id' => $product->id])  // Make sure you're passing the product ID
    ->with([
        'success' => 'Your review has been updated.',
        'isEditing' => false,
    ]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        //
    }
}
