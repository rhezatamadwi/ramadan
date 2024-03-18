@extends('layouts.layout')

@section('content')
<div class="grid gap-6 lg:gap-8 mt-10">
    <div class="bg-white py-24 sm:py-32 rounded-lg ">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:text-center">
                <!-- <h2 class="text-base font-semibold leading-7 text-indigo-600">Deploy faster</h2> -->
                <div class="flex justify-center">
                    <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-transparent transition duration-300 group-hover:bg-sky-100 sm:size-16">
                    {!! $kegiatan->icon !!}
                    </div>
                </div>
                <p class="mt-2 text-3xl font-bold tracking-tight text-sky-800 sm:text-4xl">{{ $kegiatan->judul }}</p>
                <p class="mt-6 text-lg leading-8 text-gray-600">{{ $kegiatan->deskripsi }}</p>
            </div>
            <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-4xl">
                @if ($kegiatan->gambar)
                    <img src="{{url('/images/' . $kegiatan->gambar)}}" alt="Image"/>
                @endif

                <p class="mt-10">
                @if ($kegiatan->isi)
                    {!! $kegiatan->isi !!}
                @else
                    Belum ada isi
                @endif
                </p>

                @auth
                    @if(stripos($kegiatan->judul, 'tilawah race') !== false) 
                        <div class="mt-10 flex items-center justify-center gap-x-4">
                            <button id="openModalBtn" class="bg-sky-600 hover:bg-sky-400 text-white font-bold py-2 px-4 rounded inline-flex items-center">
                                <i class="fa-solid fa-percent"></i> <span class="mx-3">Lapor Progress Tilawah</span>
                            </button>
                            @can('view-leaderboard')
                                <a href="{{ route('tilawah.index') }}" class="bg-white hover:bg-gray-400 ring-1 ring-gray-800 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                                    <i class="fa-solid fa-ranking-star"></i> <span class="mx-3">Lihat Leaderboard</span>
                                </a>
                            @endcan
                        </div>
                    @endif
                @endauth

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
