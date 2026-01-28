<?php

use Illuminate\Support\Facades\Route;
use App\Models\Banner;
use App\Models\Partner;
use App\Http\Controllers\BannerController;
use App\Models\Channel;

/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    $banner = Banner::where('is_active', true)
                    ->latest()
                    ->first();

    $partners = Partner::where('is_active', true)->get();

    return view('home', compact('banner', 'partners'));
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/team', function () {
    return view('team');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/contact', function () {
    return view('contact');
});

/*
|--------------------------------------------------------------------------
| Admin Banner Routes
|--------------------------------------------------------------------------
*/

Route::get('/admin/banner/create', [BannerController::class, 'create']);
Route::post('/admin/banner/store', [BannerController::class, 'store']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/', function () {
    $banner = Banner::where('is_active', true)->latest()->first();
    $partners = Partner::where('is_active', true)->get();
    $channels = Channel::where('is_active', true)->get();

    return view('home', compact('banner', 'partners', 'channels'));
});