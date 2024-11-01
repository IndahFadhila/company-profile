
<?php
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeLoginController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




// Route untuk halaman Home
Route::get('/', [HomeController::class, 'index'])->name('home');




// Route untuk halaman login dan register
Route::get('/login', fn() => view('login'))->name('login');
Route::get('/register', fn() => view('register'))->name('register');
Route::post('/register', RegisterController::class)->name('register.submit');
Route::post('/login', [LoginController::class, '__invoke'])->name('login.submit');
Route::get('/logout', [LogoutController::class, '__invoke'])->name('logout');




// Route untuk halaman Home Login
Route::get('/homelogin', [HomeLoginController::class, 'index'])->name('homelogin');




// Route untuk halaman karyawan (CRUD)
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [KaryawanController::class, 'index'])->name('dashboard');




    // Rute CRUD Karyawan
    Route::get('/create', [KaryawanController::class, 'create'])->name('create');
    Route::post('/karyawan/save', [KaryawanController::class, 'store'])->name('karyawan.save');
   // Rute untuk menampilkan detail karyawan (SHOW)
Route::get('/karyawan/{id}', [KaryawanController::class, 'show'])->name('show');
// Rute untuk menampilkan form edit karyawan (EDIT)
Route::get('/karyawan/{id}/edit', [KaryawanController::class, 'edit'])->name('edit');
// Rute untuk memperbarui data karyawan (UPDATE)
Route::put('/karyawan/{id}', [KaryawanController::class, 'update'])->name('karyawan.update');
// Rute untuk menghapus data karyawan (DESTROY)
Route::delete('/karyawan/{id}', [KaryawanController::class, 'destroy'])->name('karyawan.destroy');
     Route::get('/user', function (Request $request) {
        return $request->user();


     });
});








