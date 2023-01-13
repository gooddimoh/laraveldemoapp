<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
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

//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('/index', 'FrontendController@article');
//
//Route::get('/index', 'MainController@index');
//
//Route::get('/article', 'FrontendController@article');
//Route::get('/article', 'FrontendController@article');
//Route::get('/article', 'FrontendController@article');
//Route::get('/article', 'FrontendController@article');
//Route::get('/article', 'FrontendController@article');
//Route::get('/article', 'FrontendController@article');
//Route::get('/article', 'FrontendController@article');
//Route::get('/article', 'FrontendController@article');
//
//Route::get('/page1', 'FrontendController@page1');
//Route::get('/page2', 'FrontendController@page2');
//Route::get('/page3', 'FrontendController@page3');
//Route::get('/page4', 'FrontendController@page4');
//Route::get('/page5', 'FrontendController@page5');
//Route::get('/page6', 'FrontendController@page6');
//Route::get('/page7', 'FrontendController@page7');
//Route::get('/page8', 'FrontendController@page8');
//Route::get('/page9', 'FrontendController@page9');

Route::get('/JsonModel', 'App\Http\Controllers\ApiController@JsonModel');
Route::resource('photos', PhotoController::class);

