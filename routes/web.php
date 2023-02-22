<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VerifyController;

/* Auth::routes(['verify' => true]); */

Route::get('/', function () {
    return view('home');
})->middleware('auth');

Route::get('/register', [RegisterController::class, 'create'])
    ->middleware('guest')
    ->name('register.index');

    Route::get('/verificar', [VerifyController::class, 'index'])
    ->name('email.verify');

Route::post('/register', [RegisterController::class, 'store'])
    ->name('register.store');



Route::get('/login', [SessionController::class, 'create'])
    ->middleware('guest')
    ->name('login.index');

Route::post('/login', [SessionController::class, 'store'])
    ->name('login.store');

Route::get('/logout', [SessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('login.destroy');



   
Route::get('/admin', [AdminController::class, 'index'])
->middleware('auth.admin')
->name('admin.index');

   
Route::get('/email', [VerifyController::class, 'verify'])
->middleware('auth.admin')
->name('email.verify');
   


        
 /* Route::post('/email', 'VerifyController@email')->name('verify'); */

 




