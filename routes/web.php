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


/*Bảng InvoiceDetail*/
Route::get('/ds-invoicedetail', function () {
    return view('ds-invoicedetail');
})->name('dsInvoiceDetail');

Route::get('/nhap-thongtin-invoicedetail', function () {
    return view('nhap-thong-tin-invoicedetail');
})->name('them-moi-invoicedetail');


/*Bảng Tickets*/
Route::get('/ds-tickets', function () {
    return view('ds-tickets');
})->name('dsTickets');

Route::get('/nhap-thongtin-tickets', function () {
    return view('nhap-thong-tin-tickets');
})->name('them-moi-tickets');


/*Bảng Seats*/
Route::get('/ds-seats', function () {
    return view('ds-seats');
})->name('dsSeats');

Route::get('/nhap-thongtin-seats', function () {
    return view('nhap-thong-tin-seats');
})->name('them-moi-seats');


/*Bảng Sreenings*/
Route::get('/ds-sreenings', function () {
    return view('ds-sreenings');
})->name('dsSreenings');

Route::get('/nhap-thongtin-screenings', function () {
    return view('nhap-thong-tin-screenings');
})->name('them-moi-sreenings');

/*Bảng Cinemas*/
Route::get('/ds-cinemas', function () {
    return view('ds-cinemas');
})->name('dsCinemas');

Route::get('/nhap-thongtin-cinemas', function () {
    return view('nhap-thong-tin-cinemas');
})->name('them-moi-cinemas');


/*Bảng Countrys*/
Route::get('/ds-countrys', function () {
    return view('ds-countrys');
})->name('dsCountrys');

Route::get('/nhap-thongtin-countrys', function () {
    return view('nhap-thong-tin-countrys');
})->name('them-moi-countrys');

/*Bảng Movies*/
Route::get('/ds-movies', function () {
    return view('ds-movies');
})->name('dsMovies');

Route::get('/nhap-thongtin-movies', function () {
    return view('nhap-thong-tin-movies');
})->name('them-moi-movies');


/*Bảng Movies*/
Route::get('/ds-moviestypes', function () {
    return view('ds-moviestypes');
})->name('dsMoviesTypes');

Route::get('/nhap-thongtin-moviestypes', function () {
    return view('nhap-thong-tin-moviestypes');
})->name('them-moi-moviestypes');


/*Bảng ActorslnMovies*/
Route::get('/ds-actorslnMovies', function () {
    return view('ds-actorMovies');
})->name('dsActorslnMovies');

Route::get('/nhap-thongtin-actorslnMovies', function () {
    return view('nhap-thong-tin-actorslnMovies');
})->name('them-moi-actorslnMovies');