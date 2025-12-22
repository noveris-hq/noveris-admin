    <div class="p-6">
        {{-- Replace this with fluxUI:s toast, right now its on going to show once when saving profile, as its using the Laravels session flash --}}
        @if (session()->has('message'))
            <div x-data="{ show: true }" x-init="setTimeout(() => { show = false }, 5000)" x-show="show"
                class="fixed bottom-4 right-4 z-50 p-4 bg-green-500 text-white rounded-lg shadow-lg flex items-center gap-2">
                <flux:icon name="check-circle" />
                {{ session('message') }}
            </div>
        @endif
        <flux:main container class="max-w-xl lg:max-w-3xl">
            <flux:heading size="xl">Settings</flux:heading>
            <flux:separator variant="subtle" class="my-8" />

            <form wire:submit="save">
                @csrf
                <div class="flex flex-col lg:flex-row gap-4 lg:gap-6">
                    <div class="w-80">
                        <flux:heading size="lg">Profile</flux:heading>
                        <flux:subheading>Update your personal and company information.</flux:subheading>
                    </div>
                    <div class="flex-1 space-y-6">
                        <flux:field>
                            <flux:label badge="Required">Namn</flux:label>
                            <flux:input wire:model="name" :value="$name" placeholder="Ditt namn" />
                            <flux:error name="name" class="mt-1 text-sm text-red-600" />
                        </flux:field>

                        <flux:field>
                            <flux:label badge="Required">E-post</flux:label>
                            <flux:input wire:model="email" :value="$email" type="email"
                                placeholder="din@email.com" />
                            <flux:error name="email" class="mt-1 text-sm text-red-600" />
                        </flux:field>

                        <flux:input wire:model="phone" :value="$phone" type="tel" label="Telefon"
                            placeholder="070-123 45 67" />

                        <flux:input wire:model="address" :value="$address" label="Adress"
                            placeholder="Gatuadress" />

                        <div class="grid grid-cols-2 gap-4">
                            <flux:input wire:model="postal_code" :value="$postal_code" label="Postnummer"
                                placeholder="123 45" />
                            <flux:input wire:model="city" :value="$city" label="Stad"
                                placeholder="Stockholm" />
                        </div>

                        <flux:input wire:model="vat_number" :value="$vat_number" label="Organisationsnummer"
                            placeholder="XXXXXX-XXXX" />
                        {{-- <flux:field> --}}
                        {{--     <flux:label badge="Required">Organisationsnummer</flux:label> --}}
                        {{--     <flux:input wire:model="vat_number" :value="$vat_number" placeholder="XXXXXX-XXXX" /> --}}
                        {{--     <flux:error name="vat_number" class="mt-1 text-sm text-red-600" /> --}}
                        {{-- </flux:field> --}}

                        <flux:input wire:model="reference_name" :value="$reference_name" label="Referensnamn"
                            placeholder="Referens" />

                        <div class="flex justify-end">
                            <flux:button type="submit" variant="primary" class="hover:cursor-pointer"
                                wire:click.prevent="save" wire:loading.attr="disabled">
                                <span wire:loading.remove>Spara profil</span>
                                <span wire:loading>Sparar...</span>
                            </flux:button>
                        </div>
                    </div>
                </div>
            </form>
        </flux:main>
    </div>
