<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\newController;

//use app\Models\Person;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', function () {
    return "Hello world!!!!";
});

Route::get('/greets/{name}', function ($name) {
    return "Hello " . $name  ;
});
Route::get('/example', [newController::class, 'index']);

Route::get('/example1/{name}', [newController::class, 'getName']);

//display the id
Route::get('/example2/{id}', [newController::class, 'getId']);

//set a contact name
Route::get('/contact', function () {
    return view('MyView', ['name' => 'Kevin']);
});
//load a model-file
Route::get('/about', [newController::class, 'display']);
//post method
Route::post('/saveTestWords/save', function (Request $request) {
    $someName = $request->test;
    return "Hello world!!!!".$someName;
});
//showing the parameters
Route::get('/contact/{id}/{name}/{password}', [newController::class, 'show']);
//foreach loop
Route::get('/details', [newController::class, 'showDetails']);
//if-checking
Route::get('/about/{id}', [newController::class, 'displayCheck']);
//extending from parent-file
Route::get('/test', function () {
    return view('layout/about');
});
//slot and components
Route::get('/test', function () {
    return view('layout/about');
});
