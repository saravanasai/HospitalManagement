<?php

use App\Http\Controllers\Auth\AuthController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::group(['middleware'=>'isLogged'],function()
{
    Route::get('/', function () {
        return view('welcome');
    })->name('home');

    Route::post('logout',[AuthController::class,'logout'])->name('logout');
});



Route::get('login',[AuthController::class,'login'])->name('login');
Route::post('login',[AuthController::class,'authenticate'])->name('authenticate');
