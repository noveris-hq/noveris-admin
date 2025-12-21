    <div class="p-6">
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
                        <flux:input wire:model="name" :value="$name" label="Namn" placeholder="Ditt namn" />

                        <flux:input wire:model="email" :value="$email" type="email" label="E-post"
                            placeholder="din@email.com" />

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

                        <flux:input wire:model="reference_name" :value="$reference_name" label="Referensnamn"
                            placeholder="Referens" />

                        <div class="flex justify-end">
                            <flux:button type="submit" variant="primary" wire:click.prevent="save">Spara profil
                            </flux:button>
                        </div>
                    </div>
                </div>
            </form>

            {{-- <flux:separator variant="subtle" class="my-8" /> --}}

            {{-- <div class="flex flex-col lg:flex-row gap-4 lg:gap-6"> --}}
            {{--     <div class="w-80"> --}}
            {{--         <flux:heading size="lg">Preferences</flux:heading> --}}
            {{--         <flux:subheading>Customize your layout and notification preferences.</flux:subheading> --}}
            {{--     </div> --}}
            {{--     <div class="flex-1 space-y-6"> --}}
            {{--         <flux:checkbox.group label="Sidebar" --}}
            {{--             description="Select the items you want to display in the sidebar."> --}}
            {{--             <flux:checkbox value="recents" label="Recents" checked /> --}}
            {{--             <flux:checkbox value="home" label="Home" checked /> --}}
            {{--             <flux:checkbox value="applications" label="Applications" /> --}}
            {{--             <flux:checkbox value="desktop" label="Desktop" /> --}}
            {{--         </flux:checkbox.group> --}}
            {{--         <flux:separator variant="subtle" class="my-8" /> --}}
            {{--         <flux:radio.group label="Notify me about..."> --}}
            {{--             <flux:radio value="all" label="All new messages" checked /> --}}
            {{--             <flux:radio value="direct" label="Direct messages and mentions" /> --}}
            {{--             <flux:radio value="none" label="Nothing" /> --}}
            {{--         </flux:radio.group> --}}
            {{--         <div class="flex justify-end"> --}}
            {{--             <flux:button type="submit" variant="primary">Save preferences</flux:button> --}}
            {{--         </div> --}}
            {{--     </div> --}}
            {{-- </div> --}}

            {{-- <flux:separator variant="subtle" class="my-8" /> --}}

            {{-- <div class="flex flex-col lg:flex-row gap-4 lg:gap-6 pb-10"> --}}
            {{--     <div class="w-80"> --}}
            {{--         <flux:heading size="lg">Email notifications</flux:heading> --}}
            {{--         <flux:subheading>Choose which emails you'd like to get from us.</flux:subheading> --}}
            {{--     </div> --}}
            {{--     <div class="flex-1 space-y-6"> --}}
            {{--         <flux:fieldset class="space-y-4"> --}}
            {{--             <flux:switch checked label="Communication emails" --}}
            {{--                 description="Receive emails about your account activity." /> --}}
            {{--             <flux:separator variant="subtle" /> --}}
            {{--             <flux:switch checked label="Marketing emails" --}}
            {{--                 description="Receive emails about new products, features, and more." /> --}}
            {{--             <flux:separator variant="subtle" /> --}}
            {{--             <flux:switch label="Social emails" --}}
            {{--                 description="Receive emails for friend requests, follows, and more." /> --}}
            {{--             <flux:separator variant="subtle" /> --}}
            {{--             <flux:switch label="Security emails" --}}
            {{--                 description="Receive emails about your account activity and security." /> --}}
            {{--         </flux:fieldset> --}}
            {{--     </div> --}}
            {{-- </div> --}}
        </flux:main>

        @if (session()->has('message'))
            <div class="mt-4 p-4 bg-green-100 text-green-700 rounded">
                {{ session('message') }}
            </div>
        @endif
    </div>
