@extends('layouts.layout')

@section('content')
<div class="grid gap-6 lg:gap-8 mt-10">
    <div class="bg-white py-24 sm:py-32 rounded-lg ">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:text-center">
                <!-- <h2 class="text-base font-semibold leading-7 text-indigo-600">Deploy faster</h2> -->
                <p class="mt-2 text-3xl font-bold tracking-tight text-sky-800 sm:text-4xl">Leaderboard Tilawah Race</p>
            </div>
            <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-4xl">
                
            <ul role="list" class="divide-y divide-gray-100">
                <li class="flex justify-between gap-x-6 py-5">
                    <div class="flex min-w-0 gap-x-4">
                        <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-sky-100 transition duration-300 group-hover:bg-sky-100 sm:size-12">
                            <p class="font-bold text-xl">1</p>
                        </div>
                    <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                    <div class="min-w-0 flex-auto">
                        <p class="text-sm font-semibold leading-6 text-gray-900">Leslie Alexander</p>
                        <p class="mt-1 truncate text-xs leading-5 text-gray-500">leslie.alexander@example.com</p>
                    </div>
                    </div>
                    <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                    <p class="text-sm leading-6 text-gray-900">QS 114: Surat An-Nas</p>
                    <p class="mt-1 text-xs leading-5 text-gray-500">Ayat 6</p>
                    </div>
                </li>
                <li class="flex justify-between gap-x-6 py-5">
                    <div class="flex min-w-0 gap-x-4">
                        <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-sky-100 transition duration-300 group-hover:bg-sky-100 sm:size-12">
                            <p class="font-bold text-xl">2</p>
                        </div>
                    <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                    <div class="min-w-0 flex-auto">
                        <p class="text-sm font-semibold leading-6 text-gray-900">Michael Foster</p>
                        <p class="mt-1 truncate text-xs leading-5 text-gray-500">michael.foster@example.com</p>
                    </div>
                    </div>
                    <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                    <p class="text-sm leading-6 text-gray-900">QS 113: Surat Al-Falaq</p>
                    <p class="mt-1 text-xs leading-5 text-gray-500">Ayat 5</p>
                    </div>
                </li>
                <li class="flex justify-between gap-x-6 py-5">
                    <div class="flex min-w-0 gap-x-4">
                        <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-sky-100 transition duration-300 group-hover:bg-sky-100 sm:size-12">
                            <p class="font-bold text-xl">3</p>
                        </div>
                    <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                    <div class="min-w-0 flex-auto">
                        <p class="text-sm font-semibold leading-6 text-gray-900">Dries Vincent</p>
                        <p class="mt-1 truncate text-xs leading-5 text-gray-500">dries.vincent@example.com</p>
                    </div>
                    </div>
                    <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                    <p class="text-sm leading-6 text-gray-900">QS 112: Surat Al-Ikhlas</p>
                    <p class="mt-1 text-xs leading-5 text-gray-500">Ayat 4</p>
                    </div>
                </li>
                <li class="flex justify-between gap-x-6 py-5">
                    <div class="flex min-w-0 gap-x-4">
                        <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-sky-100 transition duration-300 group-hover:bg-sky-100 sm:size-12">
                            <p class="font-bold text-xl">4</p>
                        </div>
                    <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                    <div class="min-w-0 flex-auto">
                        <p class="text-sm font-semibold leading-6 text-gray-900">Lindsay Walton</p>
                        <p class="mt-1 truncate text-xs leading-5 text-gray-500">lindsay.walton@example.com</p>
                    </div>
                    </div>
                    <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                    <p class="text-sm leading-6 text-gray-900">QS 111: Surat Al-Lahab</p>
                    <p class="mt-1 text-xs leading-5 text-gray-500">Ayat 5</p>
                    </div>
                </li>
                <li class="flex justify-between gap-x-6 py-5">
                    <div class="flex min-w-0 gap-x-4">
                        <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-sky-100 transition duration-300 group-hover:bg-sky-100 sm:size-12">
                            <p class="font-bold text-xl">5</p>
                        </div>
                    <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                    <div class="min-w-0 flex-auto">
                        <p class="text-sm font-semibold leading-6 text-gray-900">Courtney Henry</p>
                        <p class="mt-1 truncate text-xs leading-5 text-gray-500">courtney.henry@example.com</p>
                    </div>
                    </div>
                    <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                    <p class="text-sm leading-6 text-gray-900">QS 110: Surat An-Nasr</p>
                    <p class="mt-1 text-xs leading-5 text-gray-500">Ayat 3</p>
                    </div>
                </li>
                <li class="flex justify-between gap-x-6 py-5">
                    <div class="flex min-w-0 gap-x-4">
                        <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-sky-100 transition duration-300 group-hover:bg-sky-100 sm:size-12">
                            <p class="font-bold text-xl">6</p>
                        </div>
                    <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                    <div class="min-w-0 flex-auto">
                        <p class="text-sm font-semibold leading-6 text-gray-900">Tom Cook</p>
                        <p class="mt-1 truncate text-xs leading-5 text-gray-500">tom.cook@example.com</p>
                    </div>
                    </div>
                    <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                    <p class="text-sm leading-6 text-gray-900">QS 109: Surat Al-Kafirun</p>
                    <p class="mt-1 text-xs leading-5 text-gray-500">Ayat 5</p>
                    </div>
                </li>
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
