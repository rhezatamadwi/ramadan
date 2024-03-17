@extends('layouts.layout')

@section('content')
    <div class="grid gap-6 lg:grid-cols-2 lg:gap-8 mt-10">
        @foreach ($list_kegiatan as $keg)
            @if($keg->order == 0)
                <a
                    href="{{ route('kegiatan.show', ['kegiatan' => $keg->id]) }}"
                    id="docs-card"
                    class="flex flex-col group items-start gap-6 overflow-hidden rounded-lg bg-transparent p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-sky-800 transition duration-300 hover:text-black/70 hover:ring-sky-100 focus:outline-none focus-visible:ring-[#FF2D20] md:row-span-2 lg:p-10 lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]"
                >

                    <div class="relative flex items-center gap-6 lg:items-end">
                        <div id="docs-card-content" class="flex items-start gap-6 lg:flex-col">
                            <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-transparent transition duration-300 group-hover:bg-sky-100 sm:size-16">
                                {!! $keg->icon !!}
                            </div>

                            <div class="pt-3 sm:pt-5 lg:pt-0">
                                <h2 class="text-xl font-semibold text-black transition duration-300 group-hover:text-sky-100 dark:text-white">{{ $keg->judul }}</h2>

                                <p class="mt-4 text-sm/relaxed">
                                    {{ $keg->deskripsi }}
                                </p>
                            </div>
                        </div>

                        <i class="fa-solid fa-arrow-right fa-lg self-center text-sky-800 transition duration-300 group-hover:text-sky-100"></i>
                    </div>
                </a>
            @else
                <a
                    href="{{ route('kegiatan.show', ['kegiatan' => $keg->id]) }}"
                    class="flex group items-start gap-4 rounded-lg bg-transparent p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-sky-800 transition duration-300 hover:text-black/70 hover:ring-sky-100 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]"
                >
                    <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-transparent transition duration-300 group-hover:bg-sky-100 sm:size-16">
                        {!! $keg->icon !!}
                    </div>

                    <div class="pt-3 sm:pt-5">
                        <h2 class="text-xl font-semibold text-black transition duration-300 group-hover:text-sky-100 dark:text-white">{{ $keg->judul }}</h2>

                        <p class="mt-4 text-sm/relaxed">
                            {{ $keg->deskripsi }}
                        </p>
                    </div>

                    <!-- <svg class="size-6 shrink-0 self-center stroke-[#FF2D20]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/></svg> -->
                    <i class="fa-solid fa-arrow-right fa-lg self-center text-sky-800 transition duration-300 group-hover:text-sky-100"></i>
                </a>
            @endif
        @endforeach
    </div>
@endsection
