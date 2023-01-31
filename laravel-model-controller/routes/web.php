<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;


// Route::get('/home', function () {
//     return view('pages/home');
// });

Route::get('/home', [MainController::class, 'home']);
