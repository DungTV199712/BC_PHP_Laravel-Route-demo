<?php

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
Route::get('/',function () {
    echo '<h2>This is home page</h2>';
});
Route::get('/about', function () {
    echo '<h2>This is About page</h2>';
});
Route::get('/contact', function () {
    echo '<h2>This is Contact page</h2>';
});
Route::get('/test', function () {
    return view('test',['name' => 'Stupid']);
});
Route::get('student/{name}', function ($name) {
    echo 'Students name is ' . $name;
});
Route::get('user/{name}', function ($name ='Stupid') {
    echo 'user name is ' . $name;
});
Route::get('/','homeController@index');