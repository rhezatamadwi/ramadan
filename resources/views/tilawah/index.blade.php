@extends('layouts.layout')

@section('content')
<div class="grid gap-6 lg:gap-8 mt-10">
    <div class="bg-white py-24 sm:py-32 rounded-lg ">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:text-center">
                <h2 class="text-base font-semibold leading-7 text-indigo-600">Terakhir update: {{ $last_update_timestamp->created_at }}</h2>
                <p class="mt-2 text-3xl font-bold tracking-tight text-sky-800 sm:text-4xl">Leaderboard Tilawah Race</p>
            </div>
            <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-4xl">
                
                <ul role="list" class="divide-y divide-gray-100">
                    @foreach ($leaderboard as $l)
                        <li class="flex justify-between gap-x-6 py-5">
                            <div class="flex min-w-0 gap-x-4">
                                <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-sky-100 transition duration-300 group-hover:bg-sky-100 sm:size-12">
                                    @if($loop->index == 0)
                                        <i class="fa-solid fa-medal"></i> 
                                    @endif
                                    <p class="font-bold text-xl">{{ $loop->index + 1 }}</p>
                                </div>
                            <!-- <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt=""> -->
                            <div class="min-w-0 flex-auto">
                                <p class="text-sm font-semibold leading-6 text-gray-900">{{ $l->name }}</p>
                                <p class="mt-1 truncate text-xs leading-5 text-gray-500">{{ $l->email }}</p>
                            </div>
                            </div>
                            <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                            <p class="text-sm leading-6 text-gray-900">QS {{ $l->index }}: Surat {{ $l->nama_surah }}</p>
                            <p class="mt-1 text-xs leading-5 text-gray-500">Ayat {{ $l->ayat_sekarang }}</p>
                            <p class="mt-1 text-xs leading-5 text-gray-500">Dilaporkan pada: {{ $l->created_at }}</p>
                            </div>
                        </li>
                    @endforeach
                </ul>

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
