<?php

namespace App\Http\Controllers;

use App\Models\LaporanProgressTilawah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpKernel\EventListener\DebugHandlersListener;

class LaporanProgressTilawahController extends Controller
{
    const TOTAL_AYAT_QURAN = 6236;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        Gate::authorize('view-leaderboard');

        $leaderboard = DB::table('laporan_progress_tilawah')
            ->select('users.name', 'users.email', 'surahs.index', 'surahs.nama_surah', 'laporan_progress_tilawah.ayat_sekarang', 'laporan_progress_tilawah.created_at', DB::raw('RANK() OVER (
                ORDER BY `⁠percentage_all` DESC, `⁠percentage_surah` DESC, laporan_progress_tilawah.created_at ASC
            ) urutan'))
            ->join('users', 'users.id', '=', 'laporan_progress_tilawah.id_user')
            ->join('surahs', 'surahs.id', '=', 'laporan_progress_tilawah.id_surah')
            ->join(DB::raw('(SELECT MAX(id) as id FROM laporan_progress_tilawah GROUP BY id_user) last_updates'), 
                function($join) {
                    $join->on('laporan_progress_tilawah.id', '=', 'last_updates.id');
                }
            )
            ->get();

        $last_update_timestamp = DB::table('laporan_progress_tilawah')
            ->select('created_at')
            ->orderBy('created_at', 'desc')
            ->first();

        return view('tilawah.index', compact('leaderboard', 'last_update_timestamp'));
    }

    public function progress()
    {
        $id_user = auth()->user()->id;
        $leaderboard = DB::table('laporan_progress_tilawah')
            ->select('users.name', 'users.email', 'surahs.index', 'surahs.nama_surah', 'laporan_progress_tilawah.ayat_sekarang', 'laporan_progress_tilawah.created_at', DB::raw('RANK() OVER (
                ORDER BY `⁠percentage_all` DESC, `⁠percentage_surah` DESC, laporan_progress_tilawah.created_at ASC
            ) urutan'))
            ->join('users', 'users.id', '=', 'laporan_progress_tilawah.id_user')
            ->join('surahs', 'surahs.id', '=', 'laporan_progress_tilawah.id_surah')
            ->where('laporan_progress_tilawah.id_user', $id_user)
            ->get();

        $last_update_timestamp = DB::table('laporan_progress_tilawah')
            ->select('created_at')
            ->where('id_user', $id_user)
            ->orderBy('created_at', 'desc')
            ->first();

        return view('tilawah.progress', compact('leaderboard', 'last_update_timestamp'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $id_user = auth()->user()->id;
        $id_surah = $request->input('surah');
        $ayat_terakhir = $request->input('ayat_terakhir');

        // calculate percentage surah
        $jumlah_ayat_surat = DB::table('surahs')->where('id', $id_surah)->first()->jumlah_ayat;

        if($ayat_terakhir < 1 || $ayat_terakhir > $jumlah_ayat_surat) {
            return redirect()->back()->with('error', 'Ayat yang dibaca terakhir tidak boleh kurang dari 1, dan tidak boleh melebihi jumlah ayat surah');
        }

        $percentage_surah = ($ayat_terakhir / $jumlah_ayat_surat) * 100;

        // calculate percentage all
        $jumlah_ayat_all = self::TOTAL_AYAT_QURAN;

        // hitung akumulasi ayat dari surat-surat sebelumnya
        $total_akumulasi_ayat = DB::table('surahs')
                    ->select(DB::raw('SUM(jumlah_ayat) AS akumulasi'))
                    ->where('index', '<', $id_surah)->first();

        if($total_akumulasi_ayat)
            $ayat_terakhir_total = (int)$total_akumulasi_ayat->akumulasi + $ayat_terakhir;
        else
            $ayat_terakhir_total = $ayat_terakhir;

        $percentage_all = ($ayat_terakhir_total / $jumlah_ayat_all) * 100;

        $timezone = new \DateTimeZone("Asia/Jakarta");

        // insert to database
        DB::table('laporan_progress_tilawah')->insert([
            'id_user' => $id_user,
            'id_surah' => $id_surah,
            'ayat_sekarang' => $ayat_terakhir,
            '⁠percentage_surah' => $percentage_surah,
            '⁠percentage_all' => $percentage_all,
            'created_at' => now($timezone),
            'updated_at' => now($timezone)
        ]);

        return redirect('/tilawah/progress')->with('success', 'Sukses melaporkan progress tilawah! Yuk makin semangat tilawahnya, biar makin banyak keberkahan yang kita dapatkan :)');
    }

    /**
     * Display the specified resource.
     */
    public function show(LaporanProgressTilawah $laporanProgressTilawah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LaporanProgressTilawah $laporanProgressTilawah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LaporanProgressTilawah $laporanProgressTilawah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LaporanProgressTilawah $laporanProgressTilawah)
    {
        //
    }
}
