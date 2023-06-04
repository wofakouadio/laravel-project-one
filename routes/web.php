<?php

use Illuminate\Support\Facades\Route;
use \App\Models\Listings;

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

Route::get('/', function () {
    return view('welcome');
});
//all listings
Route::get('/listings', function(){
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => Listings::all()
    ]);
});
//single listing
Route::get('/listing/{id}', function($id){
    return view('listing', [
        'listing' => Listings::find($id)
    ]);
});