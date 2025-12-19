<x-layout>
    @section('title', 'Noveris | Dashboard')
    @section('description', 'Dashboard för Noveris kunder.')

    <div class="mx-auto p-6">
        <h1 class="text-2xl font-semibold mb-4"> Hej {{ auth()->user()->name }}!</h1>
        <p>Här är ditt senaste projekt</p>
        <div class="mt-4">
            <livewire:view-project />
        </div>
        <x-card href="/projects" count="{{ auth()->user()->projects()->count() }}" label="Projekt" icon="folder" />
        {{-- <div class="mt-6"> --}}
        {{--     <a href="/projects" class="text-blue-600 hover:underline">Se alla projekt</a> --}}
        {{-- </div> --}}
    </div>
</x-layout>
