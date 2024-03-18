<?php

use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\LaporanProgressTilawahController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // get from cache
    $list_kegiatan = Cache::remember('list_kegiatan', 3600, function() {
        return DB::table('kegiatan')->orderBy('order')->get();
    });

    // $list_kegiatan = DB::table('kegiatan')->orderBy('order')->get();

    $id_user = 0;
    $last_progress_tilawah = null;
    if(auth()->user())
        $id_user = auth()->user()->id;

    if($id_user) {
        $last_progress_tilawah = DB::table('laporan_progress_tilawah')
            ->select('surahs.nama_surah', 'surahs.index', 'laporan_progress_tilawah.ayat_sekarang', 'laporan_progress_tilawah.created_at')
            ->join('users', 'users.id', '=', 'laporan_progress_tilawah.id_user')
            ->join('surahs', 'surahs.id', '=', 'laporan_progress_tilawah.id_surah')
            ->where('laporan_progress_tilawah.id_user', $id_user)
            ->orderBy('laporan_progress_tilawah.created_at', 'desc')
            ->first();
    }

    

    return view('welcome', compact('list_kegiatan', 'last_progress_tilawah'));
})->name('homepage');

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
