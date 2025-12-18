@props(['href' => '#', 'count' => 0, 'label' => 'Items', 'icon' => ''])

<div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4">
    <a href="{{ $href }}" class="block">
        <div
            class="group cursor-pointer transition-colors hover:border-gray-200 border border-gray-200 dark:border-gray-700 rounded-lg">
            <div class="flex items-center gap-4 p-4">
                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-primary/10">
                    {{-- Conditional icon based on $icon prop --}}
                    @if ($icon === 'folder')
                        <x-bi-folder class="h-6 w-6" />
                    @elseif($icon === 'user')
                        {{-- Add another icon SVG here if needed --}}
                        <svg class="h-6 w-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    @endif
                </div>
                <div>
                    <p class="text-2xl font-bold text-foreground">{{ $count }}</p>
                    <p class="text-sm text-muted-foreground">{{ $label }}</p>
                </div>
            </div>
        </div>
    </a>
</div>
