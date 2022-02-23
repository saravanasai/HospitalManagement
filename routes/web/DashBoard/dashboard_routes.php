<?php

use App\Http\Controllers\DashBoard\DashBoardController;

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



Route::group(['middleware'=>'isLogged','prefix'=>'dashboard'],function()
{
    Route::get('/',[DashBoardController::class,'index'])->name('dashboard');
});


