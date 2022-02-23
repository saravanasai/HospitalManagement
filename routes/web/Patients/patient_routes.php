<?php

use App\Http\Controllers\DashBoard\DashBoardController;
use App\Http\Controllers\Patient\PatientController;
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



Route::group(['middleware'=>'isLogged','prefix'=>'patient'],function()
{
    Route::get('/',[PatientController::class,'create'])->name('patient.create');
});


