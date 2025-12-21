<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? config('app.name') }}</title>
    <meta name="description" content="{{ $description ?? 'Noveris kundportal' }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @fluxAppearance
    @livewireStyles
</head>

@include('partials.admin-nav')

<body>
    <x-side-panel>
        {{ $slot }}
    </x-side-panel>
    {{-- {{ $slot }} --}}
    @livewireScripts
    @fluxScripts
</body>

</html>
