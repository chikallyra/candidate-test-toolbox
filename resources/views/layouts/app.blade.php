<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title', 'Toolbox Test Backend')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="bg-slate-50 text-slate-900 antialiased overflow-x-hidden">
        <script>
            setTimeout(() => {
                const toast = document.getElementById('toast');
                if (toast) {
                    toast.style.opacity = '0';
                    setTimeout(() => toast.remove(), 600);
                }
            }, 3000);
        </script>

        @if(session('success'))
            <div id="toast" class="fixed bottom-5 right-5 z-[110] flex items-center w-full max-w-xs p-4 text-white bg-emerald-600 rounded-2xl shadow-xl transition-opacity duration-500">
                <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-emerald-600 bg-emerald-100 rounded-xl">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                    </svg>
                </div>
                <div class="ml-3 text-sm font-bold">{{ session('success') }}</div>
            </div>
        @endif

        @if(session('warning'))
            <div id="toast" class="fixed bottom-5 right-5 z-[110] flex items-center w-full max-w-xs p-4 text-white bg-yellow-500 rounded-2xl shadow-xl transition-opacity duration-500">
                <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-yellow-500 bg-yellow-100 rounded-xl">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.485 2.495c.673-1.167 2.357-1.167 3.03 0l6.28 10.875c.673 1.167-.17 2.63-1.515 2.63H3.72c-1.347 0-2.188-1.463-1.515-2.63l6.28-10.875ZM10 5a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0V6a1 1 0 0 1 1-1Zm0 8a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z"/>
                    </svg>
                </div>
                <div class="ml-3 text-sm font-bold">{{ session('warning') }}</div>
            </div>
        @endif

        @if(session('error'))
            <div id="toast" class="fixed bottom-5 right-5 z-[110] flex items-center w-full max-w-xs p-4 text-white bg-red-500 rounded-2xl shadow-xl transition-opacity duration-500">
                <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-red-500 bg-red-100 rounded-xl">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z"/>
                    </svg>
                </div>
                <div class="ml-3 text-sm font-bold">{{ session('error') }}</div>
            </div>
        @endif

        @include('layouts.header')

        <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
            @yield('content')
        </main>

        <footer class="max-w-7xl mx-auto px-4 py-8 text-center">
        <p class="text-xs text-slate-400 uppercase tracking-[0.2em]">Toolbox Backedn Test &bull; Chikal Lyra &bull; 2024</p>
    </footer>

    </body>
</html>
