<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

Route::resource('songs', SongController::class);

Route::get('/', function () {
    return view('welcome');
});
