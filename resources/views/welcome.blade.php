<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body
    class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
    <div class="w-full max-w-2xl text-center">
        <h1 class="font-instrument-sans font-semibold text-4xl lg:text-5xl mb-6">Welcome to Laravel</h1>

        <p class="text-lg lg:text-xl mb-10">Your journey to building amazing applications starts here.</p>

        @if (Route::has('login'))
            <div class="space-x-4">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="font-medium text-lg text-white bg-[#2563EB] hover:bg-[#1e40af] px-5 py-3 rounded-lg transition">Dashboard</a>
                @else
                    <a href="{{ route('login') }}"
                        class="font-medium text-lg text-white bg-[#2563EB] hover:bg-[#1e40af] px-5 py-3 rounded-lg transition">Log
                        in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="font-medium text-lg text-[#2563EB] hover:underline px-5 py-3 rounded-lg transition">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>

    @if (Route::has('login'))
        <div class="h-14.5 hidden lg:block"></div>
    @endif
</body>

</html>
