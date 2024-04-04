<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController ;
use App\Http\Controllers\userController ;
use App\Http\Controllers\TourPackageController ;


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


Route::get('/',[StudentController::class,'showdata']);
Route::get('/register',[StudentController::class,'register']);
Route::post('/storedata',[StudentController::class,'storedata'])->name("storedata");
Route::get('/deletedata/{id}',[StudentController::class,'deletedata']);
Route::get('/editdata/{id}',[StudentController::class,'editdata']);
Route::post('/updatedata/{id}',[StudentController::class,'updatedata'])->name('updatedata');
Route::get('/personaldata/{id}',[StudentController::class,'personaldata'])->name('personaldata');


Route::get('/login',[userController::class,'login']);
Route::get('/logout',[userController::class,'logout']);
Route::post('/loginuser',[userController::class,'loginuser'])->name('loginuser');
Route::get('/createuser',[userController::class,'createuser'])->name('createuser');
Route::post('/storeuser',[userController::class,'storeuser'])->name("storeuser");


// Tour routes

Route::get('/tour',[TourPackageController::class,'index']);
