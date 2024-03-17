<?php

use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\LaporanProgressTilawahController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $list_kegiatan = DB::table('kegiatan')->orderBy('order')->get();

    return view('welcome', compact('list_kegiatan'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
 
Route::resource('kegiatan', KegiatanController::class);

Route::resource('tilawah', LaporanProgressTilawahController::class);

require __DIR__.'/auth.php';
