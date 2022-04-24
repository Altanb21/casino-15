<?php

use App\Http\Controllers\Admin\BetsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\User\BetController;
use Illuminate\Support\Facades\Route;




//guest routes
Route::middleware(['guest'])->group(function(){
    Route::get('/login',[AuthController::class,'Login'])->name('login');
    Route::get('/register',[AuthController::class,'Register'])->name('register');
    Route::post('/register',[AuthController::class,'DoRegister'])->name('do-register');
    Route::post('/login',[AuthController::class,'DoLogin'])->name('do-login');
});

//admin routes
Route::middleware('admin')->prefix('admin')->group(function(){
    Route::get('/',[DashboardController::class,'index'])->name('admin.dashboard');
    //bet managment
    Route::post('bets/change-status',[BetsController::class,'changeStatus']);
    Route::resource('bets',BetsController::class);
    Route::get('/logout',[AuthController::class,'logout'])->name('logout');
});

//user routes
Route::middleware('auth')->prefix('user')->group(function(){
    Route::get('create-bet/{id}',[BetController::class,'create'])->name('user.create-bet');
    Route::post('/create-bet',[BetController::class,'store'])->name('user.bet.store');
    Route::get('/bet-result/{id}',[BetController::class,'result'])->name('user.bet.result');
});



//public route
Route::get('/bets',[PublicController::class,'index'])->name('public.list-bets');

?>

