<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\LayananController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TestimoniController;
use App\Models\Testimoni;

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
    return view('beranda');
});
Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/profile', function () {
    return view('profile');
});
Route::get('/edit-profile', function () {
    return view('editprofile');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/registrasi', [RegisterController::class, 'index']);
Route::post('/registrasi', [RegisterController::class, 'store']);
Route::put('/edit-profile', [RegisterController::class, 'update']);
Route::put('/edit-password', [RegisterController::class, 'updateChange']);

//login
Route::get('/login', [LoginController::class, 'index'])->name('login');
//login authenticate
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/layanan', function () {
    return view('layanan');
});

Route::get('/admin', function () {
    return view('Admin.admin');
})->middleware('authadmin');

Route::get('/testimoni-admin', function () {
    return view('.Admin.testimoniadmin');
});

    //admin
Route::get('/user-admin', [RegisterController::class, 'getUser'])->middleware('authadmin');
Route::put('/user-admin/{user:id}', [RegisterController::class, 'addAdmin'])->middleware('authadmin');
Route::get('/layanan-admin', [LayananController::class, 'showAdmin']);
Route::get('/editLayanan/{layanan:id}', [LayananController::class, 'edit']);
Route::put('/editLayanan/{layanan:id}', [LayananController::class, 'update']);
Route::delete('/deleteLayanan/{layanan:id}', [LayananController::class, 'destroy']);

Route::get('/testimoni-admin', [TestimoniController::class, 'testimoniAdmin']);
Route::delete('/deleteTestimoni/{testimoni:id}', [TestimoniController::class, 'destroy']);

Route::get('/book-admin', [BookingController::class, 'index']);
Route::delete('/deleteBooking/{booking:id}', [BookingController::class, 'destroy']);
// ADD fitur

Route::get('/add-layanan', [LayananController::class, 'index']);
Route::post('/add-layanan', [LayananController::class, 'store']);

Route::get('/pernikahan', [LayananController::class, 'getPernikahan']);
Route::get('/pernikahan/{layanan:id}', [LayananController::class, 'showPernikahan']);

Route::get('/akadpernikahan', [LayananController::class, 'getAkad']);
Route::get('/akadpernikahan/{layanan:id}', [LayananController::class, 'showAkad']);

Route::get('/add-testimoni', [TestimoniController::class, 'index'])->middleware('auth');
Route::post('/add-testimoni', [TestimoniController::class, 'store'])->middleware('auth');
Route::get('/testimoni', [TestimoniController::class, 'getTestimoni']);

Route::post('/booking', [BookingController::class, 'booking'])->middleware('auth');
Route::get('/pesanan', [BookingController::class, 'indexUser'])->middleware('auth');


