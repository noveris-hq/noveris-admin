<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach ($projects as $project)
        <div wire:key="project-{{ $project->id }}"
            class="bg-white dark:bg-gray-800 rounded-lg shadow-md hover:shadow-lg transition-shadow p-6">
            <a href="projects/{{ $project->id }}" class="block">
                <h2 class="text-xl font-bold text-gray-900 dark:text-white mb-2">{{ $project->name }}</h2>
                <p class="text-sm text-gray-600 dark:text-gray-400 mb-2">Status: {{ ucfirst($project->status) }}</p>
                <p class="text-gray-700 dark:text-gray-300">{{ $project->description }}</p>
            </a>
        </div>
    @endforeach
</div>
