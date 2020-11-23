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

Route::get('/trangchu', function () {
    return view('trang-chu');
})->name('trangchu');

Route::get('/', function () {
    return view('login');
})->name('login');

		/*Bảng User*/
Route::get('/ds-user', function () {
    return view('ds-user');
})->name('dsUser');

Route::get('/nhap-thongtin-user', function () {
    return view('nhap-thong-tin-user');
})->name('them-moi-user');


		/*Bảng Invoices*/
Route::get('/ds-voices', function () {
    return view('ds-invoices');
})->name('dsVoices');


Route::get('/nhap-thongtin-invoices', function () {
    return view('nhap-thong-tin-invoices');
})->name('them-moi-invoices');

		/*Bảng Invoices*/

Route::get('/ds-staffs', function () {
    return view('ds-staffs');
})->name('dsStaffs');

Route::get('/nhap-thongtin-staffs', function () {
    return view('nhap-thong-tin-staffs');
})->name('them-moi-staffs');

	/*Bảng Invoices*/
Route::get('/ds-branchs', function () {
    return view('ds-branchs');
})->name('dsBranchs');

Route::get('/nhap-thongtin-branchs', function () {
    return view('nhap-thong-tin-branchs');
})->name('them-moi-branchs');