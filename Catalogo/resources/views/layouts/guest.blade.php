<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">

        <div class="absolute top-4 right-4 z-50">
            <button id="toggle-dark" class="px-3 py-2 rounded text-white bg-[#642764] hover:bg-[#4e1d51] transition text-sm shadow">
                Alternar tema
            </button>
        </div>  

        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 dark:bg-gray-900 dark:bg-[#2e2e2e]">
           <!-- <div>
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div>-->

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-[#642764] shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>

        </div>


        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const toggle = document.getElementById('toggle-dark');
                const html = document.documentElement;

                // Salvar preferência no localStorage
                if (localStorage.getItem('theme') === 'dark') {
                    html.classList.add('dark');
                }

                toggle?.addEventListener('click', function () {
                    html.classList.toggle('dark');
                    if (html.classList.contains('dark')) {
                        localStorage.setItem('theme', 'dark');
                    } else {
                        localStorage.setItem('theme', 'light');
                    }
                });
            });
        </script>

    </body>
</html>
