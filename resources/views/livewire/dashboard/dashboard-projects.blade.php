    <div class="mt-8">
        <flux:heading size="xl" class="mb-5">Dina projekt</flux:heading>
        <div class="overflow-x-auto rounded-lg border border-zinc-200 dark:border-zinc-700">
            <table class="min-w-full text-sm">
                <thead class="bg-zinc-50 dark:bg-zinc-900">
                    <tr>
                        <th class="px-4 py-3 text-left font-medium">Namn</th>
                        <th class="px-4 py-3 text-right font-medium">Skapad</th>
                        {{-- <th class="px-4 py-3 text-right font-medium">Åtgärder</th> --}}
                    </tr>
                </thead>
                <tbody class="divide-y divide-zinc-200 dark:divide-zinc-700">
                    @forelse($projects as $project)
                        <tr wire:navigate href="{{ route('projects.show', $project) }}" :key="{{ $project->id }}"
                            class="hover:bg-zinc-50/60 dark:hover:bg-zinc-400/60 cursor-pointer">
                            <td class="px-4 py-3 font-medium">{{ $project->name ?? '—' }}</td>
                            <td class="px-4 py-3 text-right">{{ optional($project->created_at)->format('Y-m-d') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="px-4 py-6 text-center text-zinc-500">Inga projekt ännu.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if ($projects->hasPages())
            <div class="mt-4">
                {{ $projects->onEachSide(3)->links() }}
            </div>
        @endif
    </div>
