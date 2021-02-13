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

	Route::get('/', 'HomeController@Home')->name('welcome'); //artinya kesini, karena ga ada path uri apapun
	Route::get('logout', 'AuthController@logout')->name('logout');
	
	Route::get('history1', 'HistoryController@MasukkanHistoryDay1')->name('inputHistoryDay1');
	Route::get('history2', 'HistoryController@MasukkanHistoryDay2')->name('inputHistoryDay2');
	Route::get('history3', 'HistoryController@MasukkanHistoryDay3')->name('inputHistoryDay3');
	Route::get('history4', 'HistoryController@MasukkanHistoryDay4')->name('inputHistoryDay4');
	Route::get('history5', 'HistoryController@MasukkanHistoryDay5')->name('inputHistoryDay5');
	Route::get('history6', 'HistoryController@MasukkanHistoryDay6')->name('inputHistoryDay6');
	Route::get('history7', 'HistoryController@MasukkanHistoryDay7')->name('inputHistoryDay7');
	Route::get('history8', 'HistoryController@MasukkanHistoryDay8')->name('inputHistoryDay8');
	Route::get('history9', 'HistoryController@MasukkanHistoryDay9')->name('inputHistoryDay9');
	Route::get('history10', 'HistoryController@MasukkanHistoryDay10')->name('inputHistoryDay10');
	Route::get('history11', 'HistoryController@MasukkanHistoryDay11')->name('inputHistoryDay11');
	Route::get('history12', 'HistoryController@MasukkanHistoryDay12')->name('inputHistoryDay12');
	Route::get('history13', 'HistoryController@MasukkanHistoryDay13')->name('inputHistoryDay13');
	Route::get('history14', 'HistoryController@MasukkanHistoryDay14')->name('inputHistoryDay14');
	Route::get('history15', 'HistoryController@MasukkanHistoryDay15')->name('inputHistoryDay15');
	Route::get('history16', 'HistoryController@MasukkanHistoryDay16')->name('inputHistoryDay16');
	Route::get('history17', 'HistoryController@MasukkanHistoryDay17')->name('inputHistoryDay17');
	Route::get('history18', 'HistoryController@MasukkanHistoryDay18')->name('inputHistoryDay18');
	Route::get('history19', 'HistoryController@MasukkanHistoryDay19')->name('inputHistoryDay19');
	Route::get('history20', 'HistoryController@MasukkanHistoryDay20')->name('inputHistoryDay20');
	Route::get('history21', 'HistoryController@MasukkanHistoryDay21')->name('inputHistoryDay21');
	Route::get('history22', 'HistoryController@MasukkanHistoryDay22')->name('inputHistoryDay22');
	Route::get('history23', 'HistoryController@MasukkanHistoryDay23')->name('inputHistoryDay23');
	Route::get('history24', 'HistoryController@MasukkanHistoryDay24')->name('inputHistoryDay24');
	Route::get('history25', 'HistoryController@MasukkanHistoryDay25')->name('inputHistoryDay25');
	Route::get('history26', 'HistoryController@MasukkanHistoryDay26')->name('inputHistoryDay26');
	Route::get('history27', 'HistoryController@MasukkanHistoryDay27')->name('inputHistoryDay27');
	Route::get('history28', 'HistoryController@MasukkanHistoryDay28')->name('inputHistoryDay28');
	Route::get('history29', 'HistoryController@MasukkanHistoryDay29')->name('inputHistoryDay29');
	Route::get('history30', 'HistoryController@MasukkanHistoryDay30')->name('inputHistoryDay30');

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
});