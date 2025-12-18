<x-layout>
    @section('title', 'Noveris | Projekt Detaljer')
    @section('description', 'Detaljer för ditt projekt hos Noveris.')
    <div class="max-w-7xl mx-auto p-6">
        <h1 class="text-2xl font-semibold mb-4">Projekt Detaljer</h1>
        <p>Här är detaljerna för ditt projekt hos Noveris.</p>
        <div class="mt-4">
            <livewire:project-details :id="$id" />
        </div>
    </div>
</x-layout>
