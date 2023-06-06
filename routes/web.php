<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use \App\Models\Listings;
use \App\Http\Controllers\ListingsController;


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

//Route::get('/', function () {
//    return view('welcome');
//});
//all listings
Route::get('/', [ListingsController::class, 'index']);
//create form view for new listing
Route::get('/listing/create', [ListingsController::class, 'create'])->middleware('auth');
//store new listing from form view
Route::post('/listing', [ListingsController::class, 'store'])->middleware('auth');
//show edit listing form
Route::get('/listing/{listing}/edit', [ListingsController::class, 'edit'])->middleware('auth');
//update edit listing form
Route::put('/listing/{listing}', [ListingsController::class, 'update'])->middleware('auth');
//delete listing form
Route::delete('/listing/{listing}', [ListingsController::class, 'destroy'])->middleware('auth');
//manage listings
Route::get('/listings/manage', [ListingsController::class, 'manage'])->middleware('auth');
//single listing
Route::get('/listing/{listing}', [ListingsController::class, 'show']);

//show register create form
Route::get("/register", [UserController::class, 'create'])->middleware('guest');
//create new user
Route::post("/users", [UserController::class, 'store']);
//logout user
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');
//login user
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
//login user route
Route::post('/users/authenticate', [UserController::class, 'authenticate']);


