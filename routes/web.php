<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Monolog\Handler\RotatingFileHandler;

use App\Http\Controllers\LoginController;

use App\Http\Controllers\TiketController;

use App\Http\Controllers\RegisterController;

use App\Http\Controllers\MainPageController;


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


// Route::get('/login', function () {
    //     return view('v_login');
    // });
    
    // Route::view('/','v_home');
    // Route::view('/login','v_login');
    // Route::view('/admin','admin.v_tamplate');
    // Route::view('/home','v_home');
    // Route::view('/register','v_register');
Route::get('/', function () {
    return view('v_home');
});
// ->middleware('auth');
    
Route::view('/tour','v_tour');
Route::view('/hotel','v_hotel');
Route::view('/admin','admin.dashboard.index');


Route::get('/admin', [AdminController::class,'admin'])->name('admin');
Route::post('/admin', [AdminController::class,'admin'])->name('admin');

Route::get('/mainpage', [MainPageController::class, 'mainpage'])->name('mainpage');
Route::post('/mainpage', [MainPageController::class, 'mainpage'])->name('mainpage');
    
Route::get('/login',[LoginController::class,'showLogin'])->name('login');
Route::post('/login',[LoginController::class,'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');


Route::middleware(['auth'])->group(function () {
    Route::get('/mainpage', function () {
        return view('mainpage');
    })->name('mainpage');

    Route::middleware(['tipe_user:admin'])->group(function () {
        Route::get('/admin', function () {
            return view('admin.mainpage');
        })->name('admin.mainpage');
    });

    Route::middleware(['tipe_user:pengunjung'])->group(function () {
        Route::get('/pengunjung', function () {
            return view('pengunjung.mainpage');
        })->name('pengunjung.mainpage');
    });
    Route::middleware(['tipe_user:pengelola'])->group(function () {
        Route::get('/pengelola', function () {
            return view('pengelola.mainpage');
        })->name('pengelola.mainpage');
    });
});

Route::get('/tiket',[TiketController::class,'tiket'])->name('tiket');


Route::get('/register',[RegisterController::class,'showRegistration'])->name('register');
Route::post('/register',[RegisterController::class,'register']);




// Route::post('/role-login', [LoginController::class, 'role_login'])->name('role-login');   

