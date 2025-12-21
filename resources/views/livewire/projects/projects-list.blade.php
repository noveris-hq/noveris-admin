    <div class="max-w-7xl mt-8">
        <flux:heading size="xl" class="mb-4">Dina projekt</flux:heading>
        <p>Här är en lista över alla dina projekt hos Noveris.</p>
        <div class="mt-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">
                @foreach ($projects as $project)
                    <div :key="{{ $project->id }}"
                        class="border border-gray-200 dark:border-gray-700 rounded-lg p-6 hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">
                        <flux:heading size="lg" class="mb-2">{{ $project->name }}</flux:heading>
                        @if ($project->status)
                            <flux:badge size="sm" class="mb-4">{{ ucfirst($project->status) }}</flux:badge>
                        @endif
                        @if ($project->description)
                            <flux:text class="mb-4">{{ $project->description }}</flux:text>
                        @endif
                        <a href="projects/{{ $project->id }}" class="inline-block">
                            <flux:button size="xs" variant="primary" class="hover:cursor-pointer">Visa projekt
                            </flux:button>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
