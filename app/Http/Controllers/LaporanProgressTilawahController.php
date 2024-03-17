<?php

namespace App\Http\Controllers;

use App\Models\LaporanProgressTilawah;
use Illuminate\Http\Request;

class LaporanProgressTilawahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('tilawah.index');
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
