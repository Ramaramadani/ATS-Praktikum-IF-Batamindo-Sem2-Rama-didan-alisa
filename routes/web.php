<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Halaman utama
Route::get('/', function () {
    return view('welcome');
});

// Halaman home
Route::get('/home', [PageController::class, 'home']);

// Halaman index (opsional jika punya view: pages/home.blade.php)
Route::get('/index', function () {
    return view('pages.home');
});

// Halaman-halaman Company
Route::get('/online-stores', [PageController::class, 'onlineStores']);
Route::get('/segmentation', [PageController::class, 'segmentation']);
Route::get('/marketing-crm', [PageController::class, 'marketingCRM']);
Route::get('/our-blog', [PageController::class, 'ourBlog']);
Route::get('/terms', [PageController::class, 'terms']);
Route::get('/license', [PageController::class, 'license']);
Route::get('/resources', [PageController::class, 'resources']);
Route::get('/contact', [PageController::class, 'contact']);
Route::get('/marketplace', [PageController::class, 'marketplace']);

