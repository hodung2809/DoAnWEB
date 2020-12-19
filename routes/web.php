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


Route::get('/trang-chu','AdminController@trangchu')->name('trangchu');

Route::get('/','AdminController@login')->name('login');

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/login', 'UserController@postlogin');


       



/* Actor */
Route::get('/hien-thi-dien-vien','ActorController@index')->name('actor.index');

Route::get('/tao-dien-vien','ActorController@create')->name('actor.create');

Route::post('/load-dien-vien','ActorController@store')->name('actor.store');

Route::get('/Xoa-dien-vien/{id}','ActorController@destroy')->name('actor.delete');

Route::get('/Sua-dien-vien/{id}','ActorController@getActor');

Route::post('/Sua-dien-vien/{id}','ActorController@update');

/* Country */

Route::get('/hien-thi-quoc-gia','CountryController@index')->name('country.index');

Route::get('/tao-quoc-gia','CountryController@create')->name('country.create');

Route::post('/load-quoc-gia','CountryController@store')->name('country.store');

Route::get('/Xoa-quoc-gia/{id}','CountryController@destroy')->name('country.delete');

Route::get('/Sua-quoc-gia/{id}','CountryController@getCountry');

Route::post('/Sua-quoc-gia/{id}','CountryController@update');

/* Movie */

Route::get('/hien-thi-phim','MovieController@index')->name('movie.index');

Route::get('/tao-phim','MovieController@create')->name('movie.create');

Route::post('/load-phim','MovieController@store')->name('movie.store');

Route::get('/Xoa-phim/{id}','MovieController@destroy')->name('movie.delete');

Route::get('/Sua-phim/{id}','MovieController@getMovie');

Route::post('/Sua-phim/{id}','MovieController@update');

/* MovieType */

Route::get('/hien-thi-loai-phim','MovieTypeController@index')->name('movietype.index');

Route::get('/tao-loai-phim','MovieTypeController@create')->name('movietype.create');

Route::post('/load-loai-phim','MovieTypeController@store')->name('movietype.store');

Route::get('/Xoa-loai-phim/{id}','MovieTypeController@destroy')->name('movietype.delete');

Route::get('/Sua-loai-phim/{id}','MovieTypeController@getMovieType');

Route::post('/Sua-loai-phim/{id}','MovieTypeController@update');

/* User */

Route::get('/hien-thi-nguoi-dung','UserController@index')->name('user.index');

Route::get('/tao-nguoi-dung','UserController@create')->name('user.create');

Route::post('/load-nguoi-dung','UserController@store')->name('user.store');

Route::get('/Xoa-nguoi-dung/{id}','UserController@destroy')->name('user.delete');

Route::get('/Sua-khan-gia/{id}','UserController@getUser');

Route::post('/Sua-khan-gia/{id}','UserController@update');

/* Comment */

Route::get('/hien-thi-danh-gia','CommentController@index')->name('comment.index');

Route::get('/tao-danh-gia','CommentController@create')->name('comment.create');

Route::post('/load-danh-gia','CommentController@store')->name('comment.store');

Route::get('/Xoa-danh-gia/{id}','CommentController@destroy')->name('comment.delete');

/* Manager */

Route::get('/hien-thi-quan-ly','ManagerController@index')->name('manager.index');

Route::get('/tao-quan-ly','ManagerController@create')->name('manager.create');  

Route::post('/load-quan-ly','ManagerController@store')->name('manager.store');

Route::get('/Xoa-quan-ly/{id}','ManagerController@destroy')->name('manager.delete');

Route::get('/Sua-quan-ly/{id}','ManagerController@getManager');

Route::post('/Sua-quan-ly/{id}','ManagerController@update');

/* Branch */

Route::get('/hien-thi-chi-nhanh','BranchController@index')->name('branch.index');

Route::get('/tao-chi-nhanh','BranchController@create')->name('branch.create');  

Route::post('/load-chi-nhanh','BranchController@store')->name('branch.store');

Route::get('/Xoa-chi-nhanh/{id}','BranchController@destroy')->name('branch.delete');

Route::get('/Sua-chi-nhanh/{id}','BranchController@getBranch');

Route::post('/Sua-chi-nhanh/{id}','BranchController@update');

/* Cinema */

Route::get('/hien-thi-rap','CinemaController@index')->name('cinema.index');

Route::get('/tao-rap','CinemaController@create')->name('cinema.create');  

Route::post('/load-rap','CinemaController@store')->name('cinema.store');

Route::get('/Xoa-rap/{id}','CinemaController@destroy')->name('cinema.delete');

Route::get('/Sua-rap/{id}','CinemaController@getCinema');

Route::post('/Sua-rap/{id}','CinemaController@update');

/* Seat */

Route::get('/hien-thi-ghe','SeatController@index')->name('seat.index');

Route::get('/tao-ghe','SeatController@create')->name('seat.create');  

Route::post('/load-ghe','SeatController@store')->name('seat.store');

Route::get('/Xoa-ghe/{id}','SeatController@destroy')->name('seat.delete');

/* Screening */

Route::get('/hien-thi-xuat-chieu','ScreeningController@index')->name('screening.index');

Route::get('/tao-xuat-chieu','ScreeningController@create')->name('screening.create');  

Route::post('/load-xuat-chieu','ScreeningController@store')->name('screening.store');

Route::get('/Xoa-xuat-chieu/{id}','ScreeningController@destroy')->name('screening.delete');

/* Ticket */

Route::get('/hien-thi-ve','TicketController@index')->name('ticket.index');

Route::get('/tao-ve','TicketController@create')->name('ticket.create');  

Route::post('/load-ve','TicketController@store')->name('ticket.store');

Route::get('/Xoa-ve/{id}','TicketController@destroy')->name('ticket.delete');

/* Invoice */

Route::get('/hien-thi-hoa-don','InvoiceController@index')->name('invoice.index');

Route::get('/tao-hoa-don','InvoiceController@create')->name('invoice.create');  

Route::post('/load-hoa-don','InvoiceController@store')->name('invoice.store');

Route::get('/Xoa-hoa-don/{id}','InvoiceController@destroy')->name('invoice.delete');

/* InvoiceDetail */

Route::get('/hien-thi-chi-tiet-hoa-don','InvoiceDetailController@index')->name('invoicedetail.index');

Route::get('/tao-chi-tiet-hoa-don','InvoiceDetailController@create')->name('invoicedetail.create');  

Route::post('/load-chi-tiet-hoa-don','InvoiceDetailController@store')->name('invoicedetail.store');

Route::get('/Xoa-chi-tiet-hoa-don/{id}','InvoiceDetailController@destroy')->name('invoicedetail.delete');





