<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

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
Route::get('/', [HomeController::class, 'index'])->name('frontPage.index');
Route::middleware(['guest'])->group(function() {
  
  // login
  Route::get('/login', [LoginController::class, 'index'])->name('login');
  Route::post('/login', [LoginController::class, 'doLogin']);
  
  // register
  Route::get('/register', [LoginController::class, 'register'])->name('register');
  Route::post('/register', [LoginController::class, 'doRegis']);
});

// admin
Route::group(['middleware' => ['auth', 'checklevel:admin']], function () {
  Route::get('/admin/profile', [AdminController::class, 'profile'])->name('admin.profile');
  Route::post('/admin/profile/{id}/update', [AdminController::class, 'updateProfile']);
  
  Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.index');
  Route::get('/admin/siswa', [AdminController::class, 'tambahUserPage'])->name('admin.siswa');
  Route::post('/admin/users/tambah', [AdminController:: class, 'tambahUser']);
  Route::delete('/admin/siswa/{id}/hapus', [AdminController::class, 'hapusUser']);
  Route::get('/admin/siswa/{id}/edit', [AdminController::class, 'editUser']);
  Route::post('/admin/siswa/{id}/doUpdate', [AdminController::class, 'doUpdateUser']);
});

// user
Route::group(['middleware' => ['auth', 'checklevel:siswa']], function() {
  Route::get('/siswa/dashboard', [SiswaController::class, 'index'])->name('siswa.index');

  Route::get('/siswa/keputusan', [SiswaController::class, 'halamanKeputusan'])->name('siswa.keputusan');
  Route::get('/siswa/hasil-keputusan', [SiswaController::class, 'hasilKeputusan'])->name('siswa.hasilKeputusan');
  Route::post('/siswa/doKeputusan', [SiswaController::class, 'doKeputusan']);
  Route::delete('/siswa/kalkulasi/{id}/hapus', [SiswaController::class, 'hapusKalkulasi']);
  
  Route::get('/siswa/profile', [SiswaController::class, 'profile'])->name('siswa.profile');
  Route::post('/siswa/profile/{id}/update', [SiswaController::class, 'updateProfile']);

  
});

// logout
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
