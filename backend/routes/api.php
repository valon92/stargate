<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BlogController;
use App\Http\Controllers\Api\FaqController;
use App\Http\Controllers\Api\ContactController;

// Public API routes
Route::prefix('v1')->group(function () {
    // Blog routes
    Route::get('/blogs', [BlogController::class, 'index']);
    Route::get('/blogs/featured', [BlogController::class, 'featured']);
    Route::get('/blogs/categories', [BlogController::class, 'categories']);
    Route::get('/blogs/{blog}', [BlogController::class, 'show']);
    
    // FAQ routes
    Route::get('/faqs', [FaqController::class, 'index']);
    Route::get('/faqs/categories', [FaqController::class, 'categories']);
    Route::get('/faqs/{faq}', [FaqController::class, 'show']);
    
    // Contact routes
    Route::post('/contact', [ContactController::class, 'store']);
});

// Protected routes (for admin panel in future)
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
});
