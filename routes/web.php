<?php

use App\Models\room;
use App\Models\employees;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EmployeeController;

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
    $jumlahpegawai = employees::count();
    $jumlahkamar = room::count();
    $jumlahkamartersedia = room::where('infokamar','tersedia')->count();
    $jumlahbelumbayar = employees::where('status','Belumbayar')->count();


    return view('welcome', compact('jumlahpegawai','jumlahkamar','jumlahkamartersedia','jumlahbelumbayar'));
});

Route::get('/pegawai',[EmployeeController::class, 'index'])->name('pegawai')->middleware('auth');

Route::get('/support', function () {
    return view('support');
});

Route::get('/tambahpegawai', function () {
    return view('tambahdata');
});
Route::get('/insertdata' ,[App\Http\Controllers\EmployeeController::class, 'insertdata']);
Route::post('/insertdata' ,[App\Http\Controllers\EmployeeController::class, 'insertdata']);

Route::get('/tampilkandata/{id}' ,[App\Http\Controllers\EmployeeController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/tampilkandata/{id}' ,[App\Http\Controllers\EmployeeController::class, 'tampilkandata'])->name('tampilkandata');


Route::post('/updatedata/{id}' ,[App\Http\Controllers\EmployeeController::class, 'updatedata'])->name('updatedata');

Route::get('/hapus/{id}' ,[App\Http\Controllers\EmployeeController::class, 'hapus'])->name('hapus');

Route::get('/login', function () {
    return view('pengguna.login');
});

Route::post('/loginproses' ,[App\Http\Controllers\LoginController::class, 'loginproses'])->name('loginproses');

Route::get('/register', function () {
    return view('pengguna.register');
});

Route::post('/registeruser' ,[App\Http\Controllers\LoginController::class, 'registeruser'])->name('registeruser');

Route::get('/logout' ,[App\Http\Controllers\LoginController::class, 'logout'])->name('logout');

Route::get('/kamar',[RoomController::class, 'room'])->name('room');

Route::get('/tambahkamar' ,[RoomController::class, 'tambahkamar'])->name('tambahkamar');
Route::post('/insertkamar' ,[RoomController::class, 'insertkamar'])->name('insertkamar');

Route::get('/tampilkankamar/{id}' ,[RoomController::class, 'tampilkankamar'])->name('tampilkankamar');
Route::post('/updatekamar/{id}' ,[RoomController::class, 'updatekamar'])->name('updatekamar');

Route::get('/deletekamar/{id}' ,[RoomController::class, 'deletekamar'])->name('deletekamar');