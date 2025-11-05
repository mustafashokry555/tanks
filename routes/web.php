<?php

use App\Http\Controllers\Web\HomePageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('web.index');
})->name('home');

// Set Lang
Route::get('set-locale/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'ar'])) {
        return redirect()->back()->withCookie(cookie('locale', $locale, 60 * 24 * 30)); // 30 days
    }
    return redirect()->back();
})->name('setLocale');
