<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\CartItem;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\Coupon;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            if (Auth::check()) {
                $user = Auth::user();
                $cartItems = CartItem::whereHas('cart', function ($query) use ($user) {
                    $query->where('user_id', $user->id);
                })->with('product')->get();

                $subtotal = $cartItems->sum(function ($cartItem) {
                    return $cartItem->quantity * $cartItem->price;
                });

                $shipping = 70;
                $total = $subtotal + $shipping;
                $today = Carbon::today();

                $coupon = Coupon::where('valid_from', '<=', $today)
                                ->where('valid_until', '>=', $today)
                                ->orderByDesc('amount') // optional: pick the best discount
                                ->first();

                $view->with([
                    'cartItems' => $cartItems,
                    'subtotal' => $subtotal,
                    'total' => $total,
                    'shipping'=>$shipping,
                    'globalCartCount' => $cartItems->count(),
                    'coupon'=>$coupon
                ]);
            } else {
                $view->with([
                    'cartItems' => collect(),
                    'subtotal' => 0,
                    'total' => 0,
                    'globalCartCount' => 0,
                    'shipping'=>0,
                    'coupon'=>0

                ]);
            }
        });
    }
}
