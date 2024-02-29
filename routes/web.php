<?php

use App\Http\Controllers\TestController;
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
    return view('info.about');
})->name('about');

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


/** Route Parameters */

Route::get('person/{id?}', function($id=null){
    if($id === null){
        return 'can not found any person data!';
    }
    return [
        'id' => $id,
        'name' => 'jhon doe'
    ];
});

Route::get('person/{id?}/post/{post_id?}', function($id, $postId){
    return [
        'id' => $id,
        'post' => $postId,
        'name' => 'jhon doe'
    ];
});

/**Routin - All about naming, grouping and prefix */
/**
 Route::get('animals', function(){
     return 'Dog and Cat';
 })->name('animal_test');
 */


Route::group(['as' => 'animals.', 'prefix' => 'animals'], function(){
    Route::get('/', function(){
        return 'animals!';
    });

    Route::get('/cat', function(){
        return 'Woof!';
    })->name('cat');

    Route::get('/dog', function(){
        return 'Hav!';
    })->name('dog');
});

/**
 * contact için yazdığımız [] dizin parametresi içerisindeki, ilk değer çağırmak istediğimiz controller, ikinci parametre ise
 * bu controller içerisinde çağırmak istediğimiz fonksiyonu işaretler ve çağırır.
 */
Route::get('contact',[TestController::class, 'contact'])->name('contact');

Route::get('master-layout', function(){
    return view('layouts.master');
})->name('master');
