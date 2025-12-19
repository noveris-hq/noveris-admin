<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Noveris Admin')</title>
    <meta name="description" content="@yield('description', 'Default description')">
    <meta name="keywords" content="@yield('keywords', 'default,keywords')">

    <!-- <meta property="og:title" content="@yield('og:title', 'Default Title')"> -->
    <!-- <meta property="og:description" content="@yield('og:description', 'Default description')"> -->
    <!-- <meta property="og:image" content="@yield('og:image', '/default-image.jpg')"> -->
    <link rel="canonical" href="{{ url()->current() }}">

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @fluxAppearance
    @livewireStyles
</head>

<body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-white">
    @if (Auth::check())
        @include('partials.admin-nav')
        <x-side-panel>
            {{ $slot }}
        </x-side-panel>
    @else
        {{ $slot }}
    @endif
    @fluxScripts
    @livewireScripts
</body>
