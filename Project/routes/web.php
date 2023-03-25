<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

  //Route::get('them', [PostController::class,'index'])-> name('insert');
    // Route::get('', function(){
    //     return view('home');
    // })->name('home');
    Route::get('them', [PostController::class,'them'])->name('insert');
    Route::get('', [PostController::class,'index'])->name('home');