<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DataUserController;

Route::get('/', function () {
    return view('welcome');
});

// Route biasa
Route::get('/santri', function () {
    return ('Selamat Datang');
});

// Route Parameter
Route::get('/halo/{nama}', function ($nama) {
    return 'Welcome ' . $nama;
});

// Route Name
Route::get('/buah', function () {
    return 'Mangga, Jeruk, Apel';
})->name('fruit');

// contoh route dengan view
// jika file html nya ada di dalam folder maka panggil dulu nama foldernya
// contoh: namaFolder.namaFile
// tetapi jika file htmlnya langsung menyentuh folder view maka langsung saja panggil nama filenya 
Route::get('/landing-page', function () {
    return view('landingpage');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route untuk admin
// prefix buat nambah pa
Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboardAdmin', function () {
        return view('admin.dashboardAdmin');
    });
    Route::controller(DataUserController::class)->group(function () {
        // ini route untuk nampilin table data user
        Route::get('/data-user', 'index')->name('index.data-user');
        //  ini route untuk menampilkan form data user
        Route::get('/form-data-user', 'formDataUser')->name('form.data-user');
        // ini route untuk proses create/tambah data user
        Route::post('/create-data-user', 'createDataUser')->name('create.dataUser');
        // ini route untuk menampilkan form edit data
        Route::get('edit-data-user/{id}', 'editDataUser')->name('edit.dataUser');
        // ini route untuk proses update data user
        Route::put('update-data-user/{id}', 'updateDataUser')->name('update.dataUser');
        Route::delete('delete-data-user/{id}', 'deleteDataUser')->name('delete.dataUser');
    });
});

// Route untuk user
Route::prefix('user')->middleware(['auth', 'user'])->group(function () {
    Route::get('/dashboardUser', function () {
        return view('user.dashboardUser');
    });
});
