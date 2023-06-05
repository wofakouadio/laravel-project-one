<?php

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
Route::get('/listing/create', [ListingsController::class, 'create']);
//store new listing from form view
Route::post('/listing', [ListingsController::class, 'store']);
//show edit listing form
Route::get('/listing/{listing}/edit', [ListingsController::class, 'edit']);
//update edit listing form
Route::put('/listing/{listing}', [ListingsController::class, 'update']);
//delete listing form
Route::delete('/listing/{listing}', [ListingsController::class, 'destroy']);
//single listing
Route::get('/listing/{listing}', [ListingsController::class, 'show']);

