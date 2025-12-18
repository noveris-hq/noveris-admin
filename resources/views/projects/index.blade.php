<x-layout>
    @section('title', 'Noveris | Projektc Detaljer')
    @section('description', 'Visar alla dina projekt hos Noveris.')
    <div class="max-w-7xl mx-auto p-6">
        <h1 class="text-2xl font-semibold mb-4">Dina Projekt</h1>
        <p>Här är en lista över alla dina projekt hos Noveris.</p>
        <div class="mt-4">
            <livewire:projects-list />
        </div>
    </div>
</x-layout>
