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
        <link href="{{ asset('css/output.css') }}" rel="stylesheet">
        <script src="https://kit.fontawesome.com/4c36a673e2.js" crossorigin="anonymous"></script>
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
                        @yield('content')
                    </main>

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
    </body>
</html>
