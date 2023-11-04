<?php

use App\Http\Controllers\Pages;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('mainpage');
});

Route::get('/diploms', function () {
    return view('diploms');
});

// Route::resource('admin/pages', Pages::class);

Route::prefix('admin')->group(function () {
    Route::resource('/pages', Pages::class, ['names' => 'admin.pages']);
});
