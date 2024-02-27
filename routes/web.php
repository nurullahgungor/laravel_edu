<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('about', function(){
    return 'This is a about page';
});

Route::post('')

/* ROUTE METHODS */

/** 
 * 1. GET
 * 2. POST
 * ---------------------|
 * |3. PUT              |
 * |                         => basicaly same thing, but patch method using for limited edition to put method.
 * |4. PATCH            |
 * ---------------------|
 * 5. DELETE
*/