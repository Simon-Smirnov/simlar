<?php

use App\Http\Controllers\Pages;
use App\Http\Controllers\Trashes;
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
    Route::get('/trashes', [Trashes::class, 'index'])->name('admin.trashes.index');
    Route::put('/trashes/{id}', [Trashes::class, 'restore'])->name('admin.trashes.restore');
    Route::resource('/pages', Pages::class, ['names' => 'admin.pages']);
});
