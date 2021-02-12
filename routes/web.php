<?php

use Illuminate\Support\Facades\Route;
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
Route::get('login', 'AuthController@showFormLogin')->name('login');
Route::post('login', 'AuthController@login');
Route::get('register', 'AuthController@showFormRegister')->name('register');
Route::post('register', 'AuthController@register');
 
Route::group(['middleware' => 'auth'], function () {

	Route::get('/', 'HomeController@Home')->name('welcome');
    Route::get('logout', 'AuthController@logout')->name('logout');
	Route::get('Kalender-olahraga1', 'CategoriesController@Categories1')->name('kategori1');
	Route::get('Kalender-olahraga2', 'CategoriesController@Categories2')->name('kategori2');
	Route::get('Kalender-olahraga3', 'CategoriesController@Categories3')->name('kategori3');
	Route::get('Hari1', 'JadwalController@hari_1')->name('hari1');
	Route::get('Hari2', 'JadwalController@hari_2')->name('hari2');
	Route::get('Hari3', 'JadwalController@hari_3')->name('hari3');
	Route::get('Hari4', 'JadwalController@hari_4')->name('hari4');
	Route::get('Hari5', 'JadwalController@hari_5')->name('hari5');
	Route::get('Hari6', 'JadwalController@hari_6')->name('hari6');
	Route::get('Hari7', 'JadwalController@hari_7')->name('hari7');
	Route::get('Hari8', 'JadwalController@hari_8')->name('hari8');
	Route::get('Hari9', 'JadwalController@hari_9')->name('hari9');
	Route::get('Hari10', 'JadwalController@hari_10')->name('hari10');
	Route::get('Hari11', 'JadwalController@hari_11')->name('hari11');
	Route::get('Hari12', 'JadwalController@hari_12')->name('hari12');
	Route::get('Hari13', 'JadwalController@hari_13')->name('hari13');
	Route::get('Hari14', 'JadwalController@hari_14')->name('hari14');
	Route::get('Hari15', 'JadwalController@hari_15')->name('hari15');
	Route::get('Hari16', 'JadwalController@hari_16')->name('hari16');
	Route::get('Hari17', 'JadwalController@hari_17')->name('hari17');
	Route::get('Hari18', 'JadwalController@hari_18')->name('hari18');
	Route::get('Hari19', 'JadwalController@hari_19')->name('hari19');
	Route::get('Hari20', 'JadwalController@hari_20')->name('hari20');
	Route::get('Hari21', 'JadwalController@hari_21')->name('hari21');
	Route::get('Hari22', 'JadwalController@hari_22')->name('hari22');
	Route::get('Hari23', 'JadwalController@hari_23')->name('hari23');
	Route::get('Hari24', 'JadwalController@hari_24')->name('hari24');
	Route::get('Hari25', 'JadwalController@hari_25')->name('hari25');
	Route::get('Hari26', 'JadwalController@hari_26')->name('hari26');
	Route::get('Hari27', 'JadwalController@hari_27')->name('hari27');
	Route::get('Hari28', 'JadwalController@hari_28')->name('hari28');
	Route::get('Hari29', 'JadwalController@hari_29')->name('hari29');
	Route::get('Hari30', 'JadwalController@hari_30')->name('hari30');
	Route::get('/Kalender-olahraga1/Jadwal-Hari-1','TampilOlahragaController@tampilOlahraga');
});