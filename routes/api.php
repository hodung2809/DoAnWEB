<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//phim
Route::apiResource('/phim', 'API\PhimController');

//loaiphim
Route::apiResource('/LoaiPhim', 'API\LoaiPhimController');

//ChiNhanh
Route::apiResource('/ChiNhanh', 'API\ChiNhanhController');

//ChiTietHoaDon
Route::apiResource('/ChiTietHoaDon', 'API\ChiTietHoaDonController');

//DienVien
Route::apiResource('/DienVien', 'API\DienVienController');

//Ghe
Route::apiResource('/Ghe', 'API\GheController');

//HoaDon
Route::apiResource('/HoaDon', 'API\HoaDonController');

//KhanGia
Route::apiResource('/KhanGia', 'API\KhanGiaController');

//QuanLy
Route::apiResource('/QuanLy', 'API\QuanLyController');

//QuocGia
Route::apiResource('/QuocGia', 'API\QuocGiaController');

//Rap
Route::apiResource('/Rap', 'API\RapController');

//Ve
Route::apiResource('/Ve', 'API\VeController');

//XuatChieu
Route::apiResource('/XuatChieu', 'API\XuatChieuController');

//DanhGia
Route::apiResource('/DanhGia', 'API\DanhGiaController');