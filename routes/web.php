<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Payments\LemonSqueezyController;
use App\Http\Controllers\Payments\PaddleController;
use App\Http\Controllers\Payments\StripeController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\SocialiteController;
use App\Http\Middleware\Subscribed;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('sitemap', [SitemapController::class, 'index'])->name('sitemap');

Route::get('/auth/redirect/{driver}', [SocialiteController::class, 'redirect'])
    ->name('socialite.redirect');
Route::get('/auth/callback/{driver}', [SocialiteController::class, 'callback'])
    ->name('socialite.callback');

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{article:slug}', [BlogController::class, 'article'])->name('blog.article');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Stripe Routes
    Route::prefix('stripe')->name('stripe.')->group(function () {
        Route::get('subscription-checkout/{price}', [StripeController::class, 'subscriptionCheckout'])->name('subscription.checkout');
        // If your product checkout does not require auth user,
        // move this part outside "auth:sanctum" middleware and change the logic inside method
        Route::get('product-checkout/{price}', [StripeController::class, 'productCheckout'])->name('product.checkout');
        Route::get('success', [StripeController::class, 'success'])->name('success');
        Route::get('error', [StripeController::class, 'error'])->name('error');
        Route::get('billing', [StripeController::class, 'billing'])->name('billing'); // Redirects to Customer Portal
    });

    // LemonSqueezy Routes
    Route::prefix('lemonsqueezy')->name('lemonsqueezy.')->group(function () {
        Route::get('subscription-checkout/{productId}/{variantId}', [LemonSqueezyController::class, 'subscriptionCheckout'])->name('subscription.checkout');
        // If your product checkout does not require auth user,
        // move this part outside "auth:sanctum" middleware and change the logic inside method
        Route::get('product-checkout/{variantId}', [LemonSqueezyController::class, 'productCheckout'])->name('product.checkout');
        Route::get('billing', [LemonSqueezyController::class, 'billing'])->name('billing'); // Redirects to Customer Portal
    });

    // Paddle Routes
    // Paddle Plan Checkouts can be found in app/Livewire/PaddlePlans.php component
    Route::prefix('paddle')->name('paddle.')->group(function () {
        Route::get('/subscription/{price}/swap', [PaddleController::class, 'subscriptionSwap'])
            ->name('subscription.swap');
        Route::get('/subscription/cancel', [PaddleController::class, 'subscriptionCancel'])
            ->name('subscription.cancel');
    });

    Route::middleware([Subscribed::class])->group(function () {
        // Add endpoints that are only for subscribed users
    });
});
