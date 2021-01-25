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

Route::get('/', 'HomeController@Home');

Route::get('Kalender-olahraga1', 'CategoriesController@Categories1');
Route::get('Kalender-olahraga2', 'CategoriesController@Categories2');
Route::get('Kalender-olahraga3', 'CategoriesController@Categories3');


Route::get('Kalender-olahraga1/Jadwal-Hari-1', 'Jadwal1Controller@Hari_1');
Route::get('Kalender-olahraga1/Jadwal-Hari-2', 'Jadwal1Controller@Hari_2');
Route::get('Kalender-olahraga1/Jadwal-Hari-3', 'Jadwal1Controller@Hari_3');
Route::get('Kalender-olahraga1/Jadwal-Hari-4', 'Jadwal1Controller@Hari_4');
Route::get('Kalender-olahraga1/Jadwal-Hari-5', 'Jadwal1Controller@Hari_5');
Route::get('Kalender-olahraga1/Jadwal-Hari-6', 'Jadwal1Controller@Hari_6');
Route::get('Kalender-olahraga1/Jadwal-Hari-7', 'Jadwal1Controller@Hari_7');
Route::get('Kalender-olahraga1/Jadwal-Hari-8', 'Jadwal1Controller@Hari_8');
Route::get('Kalender-olahraga1/Jadwal-Hari-9', 'Jadwal1Controller@Hari_9');
Route::get('Kalender-olahraga1/Jadwal-Hari-10', 'Jadwal1Controller@Hari_10');
Route::get('Kalender-olahraga1/Jadwal-Hari-11', 'Jadwal1Controller@Hari_11');
Route::get('Kalender-olahraga1/Jadwal-Hari-12', 'Jadwal1Controller@Hari_12');
Route::get('Kalender-olahraga1/Jadwal-Hari-13', 'Jadwal1Controller@Hari_13');
Route::get('Kalender-olahraga1/Jadwal-Hari-14', 'Jadwal1Controller@Hari_14');
Route::get('Kalender-olahraga1/Jadwal-Hari-15', 'Jadwal1Controller@Hari_15');
Route::get('Kalender-olahraga1/Jadwal-Hari-16', 'Jadwal1Controller@Hari_16');
Route::get('Kalender-olahraga1/Jadwal-Hari-17', 'Jadwal1Controller@Hari_17');
Route::get('Kalender-olahraga1/Jadwal-Hari-18', 'Jadwal1Controller@Hari_18');
Route::get('Kalender-olahraga1/Jadwal-Hari-19', 'Jadwal1Controller@Hari_19');
Route::get('Kalender-olahraga1/Jadwal-Hari-20', 'Jadwal1Controller@Hari_20');
Route::get('Kalender-olahraga1/Jadwal-Hari-21', 'Jadwal1Controller@Hari_21');
Route::get('Kalender-olahraga1/Jadwal-Hari-22', 'Jadwal1Controller@Hari_22');
Route::get('Kalender-olahraga1/Jadwal-Hari-23', 'Jadwal1Controller@Hari_23');
Route::get('Kalender-olahraga1/Jadwal-Hari-24', 'Jadwal1Controller@Hari_24');
Route::get('Kalender-olahraga1/Jadwal-Hari-25', 'Jadwal1Controller@Hari_25');
Route::get('Kalender-olahraga1/Jadwal-Hari-26', 'Jadwal1Controller@Hari_26');
Route::get('Kalender-olahraga1/Jadwal-Hari-27', 'Jadwal1Controller@Hari_27');
Route::get('Kalender-olahraga1/Jadwal-Hari-28', 'Jadwal1Controller@Hari_28');
Route::get('Kalender-olahraga1/Jadwal-Hari-29', 'Jadwal1Controller@Hari_29');
Route::get('Kalender-olahraga1/Jadwal-Hari-30', 'Jadwal1Controller@Hari_30');

Route::get('Kalender-olahraga2/Jadwal-Hari-1', 'Jadwal2Controller@Hari_1');
Route::get('Kalender-olahraga2/Jadwal-Hari-2', 'Jadwal2Controller@Hari_2');
Route::get('Kalender-olahraga2/Jadwal-Hari-3', 'Jadwal2Controller@Hari_3');
Route::get('Kalender-olahraga2/Jadwal-Hari-4', 'Jadwal2Controller@Hari_4');
Route::get('Kalender-olahraga2/Jadwal-Hari-5', 'Jadwal2Controller@Hari_5');
Route::get('Kalender-olahraga2/Jadwal-Hari-6', 'Jadwal2Controller@Hari_6');
Route::get('Kalender-olahraga2/Jadwal-Hari-7', 'Jadwal2Controller@Hari_7');
Route::get('Kalender-olahraga2/Jadwal-Hari-8', 'Jadwal2Controller@Hari_8');
Route::get('Kalender-olahraga2/Jadwal-Hari-9', 'Jadwal2Controller@Hari_9');
Route::get('Kalender-olahraga2/Jadwal-Hari-10', 'Jadwal2Controller@Hari_10');
Route::get('Kalender-olahraga2/Jadwal-Hari-11', 'Jadwal2Controller@Hari_11');
Route::get('Kalender-olahraga2/Jadwal-Hari-12', 'Jadwal2Controller@Hari_12');
Route::get('Kalender-olahraga2/Jadwal-Hari-13', 'Jadwal2Controller@Hari_13');
Route::get('Kalender-olahraga2/Jadwal-Hari-14', 'Jadwal2Controller@Hari_14');
Route::get('Kalender-olahraga2/Jadwal-Hari-15', 'Jadwal2Controller@Hari_15');
Route::get('Kalender-olahraga2/Jadwal-Hari-16', 'Jadwal2Controller@Hari_16');
Route::get('Kalender-olahraga2/Jadwal-Hari-17', 'Jadwal2Controller@Hari_17');
Route::get('Kalender-olahraga2/Jadwal-Hari-18', 'Jadwal2Controller@Hari_18');
Route::get('Kalender-olahraga2/Jadwal-Hari-19', 'Jadwal2Controller@Hari_19');
Route::get('Kalender-olahraga2/Jadwal-Hari-20', 'Jadwal2Controller@Hari_20');
Route::get('Kalender-olahraga2/Jadwal-Hari-21', 'Jadwal2Controller@Hari_21');
Route::get('Kalender-olahraga2/Jadwal-Hari-22', 'Jadwal2Controller@Hari_22');
Route::get('Kalender-olahraga2/Jadwal-Hari-23', 'Jadwal2Controller@Hari_23');
Route::get('Kalender-olahraga2/Jadwal-Hari-24', 'Jadwal2Controller@Hari_24');
Route::get('Kalender-olahraga2/Jadwal-Hari-25', 'Jadwal2Controller@Hari_25');
Route::get('Kalender-olahraga2/Jadwal-Hari-26', 'Jadwal2Controller@Hari_26');
Route::get('Kalender-olahraga2/Jadwal-Hari-27', 'Jadwal2Controller@Hari_27');
Route::get('Kalender-olahraga2/Jadwal-Hari-28', 'Jadwal2Controller@Hari_28');
Route::get('Kalender-olahraga2/Jadwal-Hari-29', 'Jadwal2Controller@Hari_29');
Route::get('Kalender-olahraga2/Jadwal-Hari-30', 'Jadwal2Controller@Hari_30');

Route::get('Kalender-olahraga3/Jadwal-Hari-1', 'Jadwal3Controller@Hari_1');
Route::get('Kalender-olahraga3/Jadwal-Hari-2', 'Jadwal3Controller@Hari_2');
Route::get('Kalender-olahraga3/Jadwal-Hari-3', 'Jadwal3Controller@Hari_3');
Route::get('Kalender-olahraga3/Jadwal-Hari-4', 'Jadwal3Controller@Hari_4');
Route::get('Kalender-olahraga3/Jadwal-Hari-5', 'Jadwal3Controller@Hari_5');
Route::get('Kalender-olahraga3/Jadwal-Hari-6', 'Jadwal3Controller@Hari_6');
Route::get('Kalender-olahraga3/Jadwal-Hari-7', 'Jadwal3Controller@Hari_7');
Route::get('Kalender-olahraga3/Jadwal-Hari-8', 'Jadwal3Controller@Hari_8');
Route::get('Kalender-olahraga3/Jadwal-Hari-9', 'Jadwal3Controller@Hari_9');
Route::get('Kalender-olahraga3/Jadwal-Hari-10', 'Jadwal3Controller@Hari_10');
Route::get('Kalender-olahraga3/Jadwal-Hari-11', 'Jadwal3Controller@Hari_11');
Route::get('Kalender-olahraga3/Jadwal-Hari-12', 'Jadwal3Controller@Hari_12');
Route::get('Kalender-olahraga3/Jadwal-Hari-13', 'Jadwal3Controller@Hari_13');
Route::get('Kalender-olahraga3/Jadwal-Hari-14', 'Jadwal3Controller@Hari_14');
Route::get('Kalender-olahraga3/Jadwal-Hari-15', 'Jadwal3Controller@Hari_15');
Route::get('Kalender-olahraga3/Jadwal-Hari-16', 'Jadwal3Controller@Hari_16');
Route::get('Kalender-olahraga3/Jadwal-Hari-17', 'Jadwal3Controller@Hari_17');
Route::get('Kalender-olahraga3/Jadwal-Hari-18', 'Jadwal3Controller@Hari_18');
Route::get('Kalender-olahraga3/Jadwal-Hari-19', 'Jadwal3Controller@Hari_19');
Route::get('Kalender-olahraga3/Jadwal-Hari-20', 'Jadwal3Controller@Hari_20');
Route::get('Kalender-olahraga3/Jadwal-Hari-21', 'Jadwal3Controller@Hari_21');
Route::get('Kalender-olahraga3/Jadwal-Hari-22', 'Jadwal3Controller@Hari_22');
Route::get('Kalender-olahraga3/Jadwal-Hari-23', 'Jadwal3Controller@Hari_23');
Route::get('Kalender-olahraga3/Jadwal-Hari-24', 'Jadwal3Controller@Hari_24');
Route::get('Kalender-olahraga3/Jadwal-Hari-25', 'Jadwal3Controller@Hari_25');
Route::get('Kalender-olahraga3/Jadwal-Hari-26', 'Jadwal3Controller@Hari_26');
Route::get('Kalender-olahraga3/Jadwal-Hari-27', 'Jadwal3Controller@Hari_27');
Route::get('Kalender-olahraga3/Jadwal-Hari-28', 'Jadwal3Controller@Hari_28');
Route::get('Kalender-olahraga3/Jadwal-Hari-29', 'Jadwal3Controller@Hari_29');
Route::get('Kalender-olahraga3/Jadwal-Hari-30', 'Jadwal3Controller@Hari_30');