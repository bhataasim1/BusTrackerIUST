<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentLogin;
use App\Http\Controllers\StudentRegister;
use App\Http\Controllers\InchargeLogin;
use App\Http\Controllers\InchargeRegister;
use App\Http\Controllers\AdminLogin;
use App\Http\Controllers\BusTrack;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/index', function () {
    return view('index');
});

Route::get('/student/login', [StudentLogin::class, 'Student_Login']);
Route::post('/student/login', [StudentLogin::class, 'StudentDashboard']);
Route::get('/student/dashboard', [StudentLogin::class, 'Dashboard']);

Route::get('register/studentregister', [StudentRegister::class, 'Student_Register']);
Route::post('/studentregister', [StudentRegister::class, 'RegisterSuccess']);


Route::get('/register', function () {
    return view('register');
});

Route::get('/incharge/login', [InchargeLogin::class, 'Incharge_Login']);
Route::post('/incharge/login', [InchargeLogin::class, 'InchargeDashboard']);
Route::get('/incharge/dashboard', [InchargeLogin::class, 'Dashboard']);

Route::get('register/inchargeregister', [InchargeRegister::class, 'Incharge_Register']);
Route::post('/inchargeregister', [InchargeRegister::class, 'RegisterSuccess']);

// ====================== Admin ================================= 

Route::get('/admin/login', [AdminLogin::class, 'Admin_Login']);
Route::post('/admin/login', [AdminLogin::class, 'AdminDashboard']);
Route::get('/admin/dashboard', [AdminLogin::class, 'Dashboard']);
Route::get('/admin/busdetails', [AdminLogin::class, 'getBusDetails']);
Route::get('/admin/studentdetails', [AdminLogin::class, 'getStudentDetails']);
Route::get('/admin/addbus', [AdminLogin::class, 'addBus']);
Route::post('/admin/addbus', [AdminLogin::class, 'addBusSuccess']);
Route::get('/admin/logout', [AdminLogin::class, 'AdminLogout']);

// ============== Track Bus =============================== 
Route::get('/trackbus/{bus_no}', [BusTrack::class, 'TrackBus'])->name('track.bus');
Route::post('/updatebus/{bus_no}', [BusTrack::class, 'updateLocation'])->name ('update.bus');