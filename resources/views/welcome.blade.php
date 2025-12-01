<x-layout>
    <div class="min-h-screen flex  justify-center items-center">
        <div class="w-full max-w-3xl text-center">
            <h1 class="font-instrument-sans font-semibold text-4xl lg:text-5xl mb-6">Välkommen till Noveris Admin</h1>

            <p class="text-lg lg:text-xl mb-10">Början på något nytt</p>

            @if (!Auth::check())
                <div class="space-x-4">
                    <a href="{{ route('login') }}"
                        class="font-medium text-lg text-white bg-[#2563EB] hover:bg-[#1e40af] px-5 py-3 rounded-lg transition">Log
                        in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="font-medium text-lg text-[#2563EB] hover:underline px-5 py-3 rounded-lg transition">Register</a>
                    @endif
                </div>
            @endif
        </div>
    </div>
</x-layout>
