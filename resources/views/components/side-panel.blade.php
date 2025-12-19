<div class="min-h-screen bg-white dark:bg-zinc-800 antialiased">
    @php
        $uid = auth()->id() ?? 'guest';
        $cacheKey = 'sidebar:user:' . $uid;
        $cachedSidebar = \Illuminate\Support\Facades\Cache::remember($cacheKey, now()->addMinutes(5), function () {
            return view('components.partials.sidebar-top')->render();
        });
    @endphp
    {!! $cachedSidebar !!}

    <flux:header class="lg:hidden">
        <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />

        <flux:spacer />

        <flux:dropdown position="top" alignt="start">
            <flux:profile avatar="{{ asset('images/me.jpg') }}" />

            <flux:menu>
                <flux:menu.radio.group>
                    <flux:menu.radio checked>
                        <span
                            x-data="{ userName: '{{ addslashes(auth()->user()->name) }}' }"
                            @user-name-updated.window="userName = $event.detail.name"
                            x-cloak
                            x-text="userName"
                        ></span>
                    </flux:menu.radio>
                </flux:menu.radio.group>

                <flux:menu.separator />

                <flux:menu.item icon="arrow-right-start-on-rectangle">Logout</flux:menu.item>
            </flux:menu>
        </flux:dropdown>
    </flux:header>

    <flux:main>
        <flux:heading size="xl" level="1">Good afternoon,
            <span
                x-data="{ userName: '{{ addslashes(auth()->user()->name) }}' }"
                @user-name-updated.window="userName = $event.detail.name"
                x-cloak
                x-text="userName"
            ></span>
        </flux:heading>

        <flux:text class="mb-6 mt-2 text-base">Here's what's new today</flux:text>

        <flux:separator variant="subtle" />
        {{ $slot }}
    </flux:main>

</div>
