<div class="min-h-screen bg-white dark:bg-zinc-800 antialiased">
    <flux:sidebar sticky collapsible="mobile"
                  class="bg-zinc-50 dark:bg-zinc-900 border-r border-zinc-200 dark:border-zinc-700">
        <flux:sidebar.header>
            <flux:sidebar.brand href="#" logo="https://fluxui.dev/img/demo/logo.png"
                                logo:dark="https://fluxui.dev/img/demo/dark-mode-logo.png" name="Acme Inc." />

            <flux:sidebar.collapse class="lg:hidden" />
        </flux:sidebar.header>

        <flux:sidebar.search placeholder="Search..." />

        <flux:sidebar.nav>
            <flux:sidebar.item icon="home" href="#" current>Home</flux:sidebar.item>
            <flux:sidebar.item icon="inbox" badge="12" href="#">Inbox</flux:sidebar.item>
            <flux:sidebar.item icon="document-text" href="#">Documents</flux:sidebar.item>
            <flux:sidebar.item icon="calendar" href="#">Calendar</flux:sidebar.item>

            <flux:sidebar.group expandable heading="Favorites" class="grid">
                <flux:sidebar.item href="#">Marketing site</flux:sidebar.item>
                <flux:sidebar.item href="#">Android app</flux:sidebar.item>
                <flux:sidebar.item href="#">Brand guidelines</flux:sidebar.item>
            </flux:sidebar.group>
        </flux:sidebar.nav>

        <flux:sidebar.spacer />

        <flux:sidebar.nav>
            <flux:sidebar.item icon="cog-6-tooth" href="{{ route('profile') }}">Settings</flux:sidebar.item>
            <flux:sidebar.item icon="information-circle" href="#">Help</flux:sidebar.item>
        </flux:sidebar.nav>

        <flux:dropdown position="top" align="start" class="max-lg:hidden hover:cursor-pointer">
            <div class="flex items-center gap-3">
                <img src="{{ asset('images/me.jpg') }}" alt="Profile" class="h-8 w-8 rounded-full" />
                <span
                    class="font-medium"
                    x-data="{ userName: '{{ addslashes(auth()->user()->name) }}' }"
                    @user-name-updated.window="userName = $event.detail.name"
                    x-cloak
                    x-text="userName"
                ></span>
            </div>
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

                <form method="POST" action="{{ route('logout') }}" class="inline ">
                    @csrf
                    <flux:menu.item type="submit" icon="arrow-right-start-on-rectangle" class="hover:cursor-pointer">
                        Logout
                    </flux:menu.item>
                </form>

            </flux:menu>
        </flux:dropdown>
    </flux:sidebar>

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
