<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ramadan LPDP {{ now()->year }}</title>

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="{{ url('/images/favicon-16x16.png') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="{{ asset('css/output.css') }}?v=0.0.1.1" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://kit.fontawesome.com/4c36a673e2.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

        <!-- Push Notification -->
        <script src="https://cdn.onesignal.com/sdks/web/v16/OneSignalSDK.page.js" defer></script>
        <script>
            window.OneSignalDeferred = window.OneSignalDeferred || [];
            OneSignalDeferred.push(function(OneSignal) {
                OneSignal.init({
                appId: "e306f36a-b550-47ab-96a7-b9eb6d187592",
                });
            });
        </script>

    </head>
    <style>
        .background-animate {
            background-size: 400%;

            -webkit-animation: AnimationName 15s ease infinite;
            -moz-animation: AnimationName 15s ease infinite;
            animation: AnimationName 15s ease infinite;
        }

        @keyframes AnimationName {
            0%,
            100% {
            background-position: 0% 50%;
            }
            50% {
            background-position: 100% 50%;
            }
        }
    </style>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <!-- <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50"> -->
            <div class="
    w-full
    bg-gradient-to-r
    from-sky-300
    via-yellow-300
    to-emerald-300
    background-animate
  ">

            <!-- <img id="background" class="absolute -left-20 top-0 max-w-[877px]" src="https://laravel.com/assets/img/welcome/background.svg" /> -->
            <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    @include('layouts.header')

                    <main>
                        <a class="group" href="{{ url('/') }}"><h2 class="text-5xl leading-9 font-bold text-center mb-5 text-sky-800 group-hover:text-sky-100">Gema Ramadan</h2></a>
                        <!-- <h3 class="text-2xl leading-7 text-center text-gray-600">Tingkatkan Iman, Raih Ampunan</h3> -->
                        <h3 id="typewriter" class="text-2xl leading-7 text-center text-gray-600"></h3>

                        <!-- Announcement -->
                        <div class="relative isolate flex items-center gap-x-6 overflow-hidden bg-gray-50 px-6 py-2.5 sm:px-3.5 sm:before:flex-1 mt-5">
                            <div class="absolute left-[max(-7rem,calc(50%-52rem))] top-1/2 -z-10 -translate-y-1/2 transform-gpu blur-2xl" aria-hidden="true">
                                <div class="aspect-[577/310] w-[36.0625rem] bg-gradient-to-r from-[#ff80b5] to-[#9089fc] opacity-30" style="clip-path: polygon(74.8% 41.9%, 97.2% 73.2%, 100% 34.9%, 92.5% 0.4%, 87.5% 0%, 75% 28.6%, 58.5% 54.6%, 50.1% 56.8%, 46.9% 44%, 48.3% 17.4%, 24.7% 53.9%, 0% 27.9%, 11.9% 74.2%, 24.9% 54.1%, 68.6% 100%, 74.8% 41.9%)"></div>
                            </div>
                            <div class="absolute left-[max(45rem,calc(50%+8rem))] top-1/2 -z-10 -translate-y-1/2 transform-gpu blur-2xl" aria-hidden="true">
                                <div class="aspect-[577/310] w-[36.0625rem] bg-gradient-to-r from-[#ff80b5] to-[#9089fc] opacity-30" style="clip-path: polygon(74.8% 41.9%, 97.2% 73.2%, 100% 34.9%, 92.5% 0.4%, 87.5% 0%, 75% 28.6%, 58.5% 54.6%, 50.1% 56.8%, 46.9% 44%, 48.3% 17.4%, 24.7% 53.9%, 0% 27.9%, 11.9% 74.2%, 24.9% 54.1%, 68.6% 100%, 74.8% 41.9%)"></div>
                            </div>
                            <div class="flex flex-wrap items-center gap-x-4 gap-y-2">
                                <p class="text-sm leading-6 text-gray-900">
                                <strong class="font-semibold">Pengumuman:</strong> Tonton Kampus Ramadan episode terbaru dengan klik tombol ini:
                                </p>
                                <a href="{{ route('kegiatan.show', ['kegiatan'=>5]) }}" class="flex-none rounded-full bg-gray-900 px-3.5 py-1 text-sm font-semibold text-white shadow-sm hover:bg-gray-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-900">Lihat <span aria-hidden="true">&rarr;</span></a>
                            </div>
                            <div class="flex flex-1 justify-end">
                                <!-- <button type="button" class="-m-3 p-3 focus-visible:outline-offset-[-4px]">
                                <span class="sr-only">Dismiss</span>
                                <svg class="h-5 w-5 text-gray-900" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
                                </svg>
                                </button> -->
                            </div>
                        </div>

                        <!-- flash message -->
                        @if (session('success'))
                            <div class="bg-emerald-100 border-t border-b border-emerald-500 text-emerald-700 px-4 py-3 mt-5" role="alert">
                                <p class="font-bold">{{ session('success') }}</p>
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="bg-red-100 border-t border-b border-red-500 text-red-700 px-4 py-3 mt-5" role="alert">
                                <p class="font-bold">{{ session('error') }}</p>
                            </div>
                        @endif

                        @yield('content')
                    </main>

                    <!-- Modal -->
                    <div id="modal" class="fixed hidden z-50 inset-0 bg-gray-900 bg-opacity-60 overflow-y-auto h-full w-full px-4">
                        <div class="relative top-40 mx-auto shadow-xl rounded-md bg-white max-w-md">
                            <div class="flex justify-end p-2">
                                <button id="close-modal-x" type="button"
                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center close-modal-x">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </div>
                            <div class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                                <div class="p-4">
                                    <h2 class="text-2xl font-bold" id="modal-headline">Lapor Progress Tilawah Race</h2>

                                    <div class="bg-sky-100 border-t border-b border-sky-500 text-gray-600 px-4 py-3 mt-5" role="alert">
                                        <ul class="list-disc px-4">
                                            <li>Sebelum lapor progress tilawah, pastikan kamu sudah membaca ketentuannya <a class="text-sky-600 hover:text-sky-800" target="_blank" href="{{ route('kegiatan.show', ['kegiatan' => 10]) }}">disini</a> yaa :)</li>
                                            <li>Untuk menandakan bahwa kamu khatam, silahkan masukkan Surat An-Nas ayat 6 sebagai laporan progress kamu ya</li>
                                        </ul>
                                    </div>
                                    
                                    <!-- Form -->
                                    <form action="{{ route('tilawah.store') }}" method="POST">
                                        @csrf
                                        <div class="mt-4">
                                            <label for="surah" class="block text-sm font-medium text-gray-700">Surat</label>
                                            <select name="surah" id="surah" class="mt-1 select2 focus:ring-sky-500 focus:border-sky-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md leading-10" required style="width:100% !important;">
                                                @php
                                                    $surahs = App\Models\Surah::all();
                                                @endphp
                                                @foreach ($surahs as $surah)
                                                    <option value="{{ $surah->id }}">QS:{{ $surah->index . ' ' . $surah->nama_surah }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="mt-4">
                                            <label for="ayat_terakhir" class="block text-sm font-medium text-gray-700">Ayat</label>
                                            <input type="number" name="ayat_terakhir" id="ayat_terakhir" class="mt-1 focus:ring-sky-500 focus:border-sky-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
                                        </div>
                                        <div class="mt-4 flex items-center justify-center">
                                            <button type="submit" class="px-6 py-2 bg-sky-600 hover:bg-sky-400 text-white rounded-md">Submit</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="px-4 py-3 bg-gray-100 text-right">
                                    <button id="closeModalBtn" class="px-4 py-2 bg-gray-500 hover:bg-gray-400 text-white rounded-md closeModalBtn">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    @include('layouts.footer')
                </div>
            </div>
        </div>
        <script>
            const words = ["Tingkatkan Iman, Raih Ampunan"];
            let i = 0;
            let j = 0;
            let currentWord = "";
            let isDeleting = false;

            function type() {
            currentWord = words[i];
            if (isDeleting) {
                document.getElementById("typewriter").textContent = currentWord.substring(0, j-1);
                j--;
                if (j == 1) {
                isDeleting = false;
                i++;
                if (i == words.length) {
                    i = 0;
                }
                }
            } else {
                document.getElementById("typewriter").textContent = currentWord.substring(0, j+1);
                j++;
                if (j == currentWord.length) {
                    setTimeout(() => {
                        isDeleting = true;
                    }, 1500);
                }
            }
            setTimeout(type, 100);
            }

            type();
        </script>
        <script>
            $(document).ready(function() {
                $('.select2').select2();
            });
        </script>
        <script>
            /* const modal = document.getElementById('modal');
            const openModalBtn = document.getElementById('openModalBtn');
            const closeModalBtn = document.getElementById('closeModalBtn');
            const closeModalX = document.getElementById('close-modal-x');

            if(openModalBtn) {
                openModalBtn.addEventListener('click', () => {
                    modal.classList.remove('hidden');
                });
            }

            closeModalBtn.addEventListener('click', () => {
                modal.classList.add('hidden');
            });

            closeModalX.addEventListener('click', () => {
                modal.classList.add('hidden');
            }); */

            const modal = $('#modal');
            const openModalBtn = $('.openModalBtn');
            const closeModalBtn = $('.closeModalBtn');
            const closeModalX = $('.close-modal-x');

            if(openModalBtn) {
                openModalBtn.click(function() {
                    modal.removeClass('hidden');
                });
            }

            closeModalBtn.click(function() {
                modal.addClass('hidden');
            });

            closeModalX.click(function() {
                modal.addClass('hidden');
            });

            window.addEventListener('click', (e) => {
                if (e.target === modal) {
                    modal.classList.add('hidden');
                }
            });
        </script>
    </body>
</html>
