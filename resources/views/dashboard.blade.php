<x-layout>
    @section('title', 'Noveris | Dashboard')
    @section('description', 'Dashboard för Noveris kunder.')

    <div class="">
        <p class="text-2xl font-semibold mb-4"> Hej {{ auth()->user()->name }}!</p>
    </div>
</x-layout>
