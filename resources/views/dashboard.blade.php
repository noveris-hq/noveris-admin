<x-layout>
    @section('title', 'Noveris | Dashboard')
    @section('description', 'Dashboard för Noveris kunder.')

    <div class="">
        <h1 class="text-2xl font-semibold mb-4"> Hej {{ auth()->user()->name }}!</h1>
        <p>Här är ditt projekt</p>
        <div class="mt-4">
            <livewire:view-project />
        </div>
    </div>
</x-layout>
