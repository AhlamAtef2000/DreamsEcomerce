<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DiscountController;
use App\Http\Controllers\Admin\AccessoryController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\StatusController;
use App\Http\Controllers\Admin\MaterialController;
use App\Http\Controllers\Admin\SizeController;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\Admin\FeatureController;
use App\Http\Controllers\Admin\ShippingMethodController;
use App\Http\Controllers\Admin\CountryController;

use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FavouriteController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ContactController as FrontEndContactController;
use App\Http\Controllers\Admin\ContactController;

use App\Http\Controllers\ContactInfoController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\ShipmentController;
use App\Http\Controllers\ReviewController as FrontEndReviewController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ProductController as FrontEndProduct;
use App\Http\Controllers\OrderController as FrontEndOrderController;
use App\Http\Controllers\UserController as FrontEndUserController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes(['verify' => true]);
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);
Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [ForgotPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ForgotPasswordController::class, 'reset']);
Route::post('/password/update', [ResetPasswordController::class, 'update'])->name('password.update');
Route::get('email/verify', [VerificationController::class, 'show'])->name('verification.notice');
Route::get('email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify');
Route::post('email/resend', [VerificationController::class, 'resend'])->name('verification.resend');

Route::prefix('admin')->name('admin.')->middleware('role:admin')->group(function () {
Route::get('/dashboard', function () {
        return view('dashboard.index');
    })->name('dashboard')->middleware('verified'); // ✅ fixed
Route::resource('products', ProductController::class);
Route::resource('categories', CategoryController::class);
Route::resource('orders', OrderController::class);
Route::resource('accessories', AccessoryController::class);
Route::resource('reviews', ReviewController::class);
Route::resource('user', UserController::class);
Route::resource('features', FeatureController::class);
Route::resource('colors', ColorController::class);
Route::resource('sizes', SizeController::class);
Route::resource('materials', MaterialController::class);
Route::resource('statuses', StatusController::class);
Route::resource('contactInfo', ContactInfoController::class);
Route::resource('contacts', ContactController::class);

Route::resource('coupons', CouponController::class)->names('coupons');
Route::resource('shippingMethods', ShippingMethodController::class);
Route::resource('countries', CountryController::class);
Route::get('/profile', [UserController::class, 'profile'])->name('profile')->middleware('role:admin');
Route::post('/profile/update', [UserController::class, 'updateProfile'])->name('profile.update');

});


Route::get('/',[HomeController::class,'index']);
Route::get('/home', [CartController::class, 'index'])->name('home'); // Home route


Route::prefix('user')->name('user.')->group(function () {
Route::get('/', [HomeController::class, 'index'])->name('home'); // Home route
Route::get('/contact', [ContactInfoController::class, 'showContactInfo'])->name('contact');
Route::resource('favorites', FavouriteController::class);
Route::get('/about', function () {
        return view('frontend.about.index');
})->name('about');
Route::get('/cart/showCart', [CartController::class, 'ShowCart'])->name('cart.index');
Route::resource('cart', CartController::class)->names('cart');
Route::delete('cart/{cartItem}', [CartController::class, 'remove'])->name('cart.remove');
Route::get('/single-product/{id}', [FrontEndProduct::class, 'show'])->name('single-product');
Route::get('/shop', [ShopController::class, 'index'])->name('shop');
Route::post('/apply-coupon', [CouponController::class, 'applyCoupon'])->name('coupon.apply');
// Route to remove coupon
Route::post('/coupon/remove', [CouponController::class, 'remove'])->name('coupon.remove');

Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::resource('orders', FrontEndOrderController::class)->names('orders');
Route::middleware(['auth'])->group(function () {
Route::get('/profile', [FrontEndUserController::class, 'index'])->name('profile')->middleware('role:user');
Route::post('/profile/update', [FrontEndUserController::class, 'update'])->name('profile.update');
Route::resource('/shipments', ShipmentController::class)->names('shipments');
Route::get('/shipments/{shipment}', [ShipmentController::class, 'show'])->name('shipments.show');
Route::post('/reviews/store', [FrontEndReviewController::class, 'store'])->name('review.store');
Route::get('/user/review/{review}/edit', [FrontEndReviewController::class, 'edit'])->name('review.edit');
Route::put('/user/reviews/{id}', [FrontEndReviewController::class, 'update'])->name('review.update');
Route::post('/cart/update', [CartController::class, 'update'])->name('cart.update');
Route::resource('contacts', FrontEndContactController::class);
Route::get('/product-details/{id}', [ShopController::class, 'getProductDetails'])->name('product.details.ajax');
Route::get('/category-products/{categoryId}', [ShopController::class, 'getCategoryProducts']);


});
});

Route::get('/api/countries', [ShipmentController::class, 'getCountries']);
Route::get('/shipping-methods/{countryId}', [ShipmentController::class, 'getShippingMethodsByCountry']);


Route::get('/security-policy', function () {
        return view('security-policy');
    });
    