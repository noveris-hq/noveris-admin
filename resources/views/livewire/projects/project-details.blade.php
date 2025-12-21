    <div class="max-w-7xl mt-8">
        <h1 class="text-2xl font-semibold mb-4">Projekt Detaljer</h1>
        <p>Här är detaljerna för ditt projekt hos Noveris.</p>
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6 max-w-2xl mt-8">
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">{{ $project->name }}</h2>
            <div class="space-y-3">
                <div class="flex items-center gap-4">
                    <span class="font-semibold text-gray-700 dark:text-gray-300 w-24">Status:</span>
                    <span class="text-gray-900 dark:text-white">{{ ucfirst($project->status) }}</span>
                </div>
                <div class="flex items-start gap-4">
                    <span class="font-semibold text-gray-700 dark:text-gray-300 w-24">Beskrivning:</span>
                    <span class="text-gray-900 dark:text-white">{{ $project->description }}</span>
                </div>
                <div class="flex items-center gap-4">
                    <span class="font-semibold text-gray-700 dark:text-gray-300 w-24">Startdatum:</span>
                    <span class="text-gray-900 dark:text-white">{{ $project->start_date }}</span>
                </div>
                <div class="flex items-center gap-4">
                    <span class="font-semibold text-gray-700 dark:text-gray-300 w-24">Slutdatum:</span>
                    <span class="text-gray-900 dark:text-white">{{ $project->end_date }}</span>
                </div>
            </div>
        </div>
    </div>
