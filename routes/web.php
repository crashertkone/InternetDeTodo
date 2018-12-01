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

Route::get('/principal', function () {
    return view('principal');
});


Route::resource('proreport', 'ReproduController');

Route::resource('senreport', 'ResensoController');


Route::resource('products', 'ProductController');

Route::resource('reports', 'ReportController');


Route::get('descargar-reportes', 'ResensoController@pdf')->name('senreport.pdf');
Route::get('descargar-productos', 'ReproduController@pdf')->name('proreport.pdf');



Route::resource('dates', 'DateController');


Route::get('/pictures', function () {
    return view('pictures');
});

Route::get('charts', 'ChartController@index')->name('chart.index');








Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
