@extends('layouts.layout')

@section('content')
<div class="grid gap-6 lg:gap-8 mt-10">
    <div class="bg-white py-24 sm:py-32 rounded-lg ">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:text-center">
                <h2 class="text-base font-semibold leading-7 text-indigo-600">
                    @if(empty($last_update_timestamp))
                        Terakhir update: Belum ada laporan
                    @else
                        Terakhir update: {{ $last_update_timestamp->created_at }}
                    @endif
                    </h2>
                <p class="mt-2 text-3xl font-bold tracking-tight text-sky-800 sm:text-4xl">Histori Laporan Tilawah Race</p>
            </div>
            <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-4xl">
                @if($leaderboard->isEmpty())
                    <div class="flex items-center justify-center gap-x-4">
                        <p class="leading-6 text-gray-900">Belum ada laporan. Yuk mulai lapor progress tilawah kamu dengan klik tombol ini :</p>
                    </div>
                    <div class="flex items-center justify-center gap-x-4">
                        <button id="openModalBtn" class="bg-sky-600 hover:bg-sky-400 text-white font-bold py-2 px-4 rounded inline-flex items-center openModalBtn mt-5">
                            <i class="fa-solid fa-percent"></i> <span class="mx-3">Lapor Progress Tilawah</span>
                        </button>
                    </div>
                @else
                    <ul role="list" class="divide-y divide-gray-100 grid justify-items-center">
                        @foreach ($leaderboard as $l)
                            <li class="flex justify-center items-center gap-x-6 py-5">
                                <div class="min-w-0 justify-items-center">
                                    <p class="text-sm font-semibold leading-6 text-gray-900">Laporan {{ $loop->count - $loop->index }}</p>
                                    <p class="mt-1 truncate text-xs leading-5 text-gray-500">Dilaporkan pada: {{ $l->created_at }}</p>
                                </div>
                                <div class="sm:flex sm:flex-col sm:items-end">
                                    <p class="text-sm leading-6 text-gray-900">QS {{ $l->index }}: Surat {{ $l->nama_surah }}</p>
                                    <p class="mt-1 text-xs leading-5 text-gray-500">Ayat {{ $l->ayat_sekarang }}</p>
                                    <!-- <p class="mt-1 text-xs leading-5 text-gray-500">Dilaporkan pada: {{ $l->created_at }}</p> -->
                                </div>
                            </li>
                        @endforeach
                    </ul>
                @endif
                <div class="mt-10 flex items-center justify-center gap-x-6">
                    <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center" onclick="history.back()">
                        <i class="fa-solid fa-arrow-left"></i>
                        <span class="mx-3">Kembali</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
