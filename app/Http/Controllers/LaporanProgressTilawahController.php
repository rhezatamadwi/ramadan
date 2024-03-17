<?php

namespace App\Http\Controllers;

use App\Models\LaporanProgressTilawah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpKernel\EventListener\DebugHandlersListener;

class LaporanProgressTilawahController extends Controller
{
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
