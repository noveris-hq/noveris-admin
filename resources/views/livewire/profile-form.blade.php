<div>
    <flux:main container class="max-w-xl lg:max-w-3xl">
        <flux:heading size="xl">Settings</flux:heading>
        <flux:separator variant="subtle" class="my-8" />
        <div class="flex flex-col lg:flex-row gap-4 lg:gap-6">
            <div class="w-80">
                <flux:heading size="lg">Profile</flux:heading>
                <flux:subheading>This is how others will see you on the site.</flux:subheading>
            </div>
            <div class="flex-1 space-y-6">
                <flux:input label="Username"
                    description="This is your public display name. It can be your real name or a pseudonym. You can only change this once every 30 days."
                    placeholder="calebporzio" />
                <flux:select label="Primary email"
                    description:trailing="You can manage verified email addresses in your email settings."
                    placeholder="Select primary email...">
                    <flux:select.option>lotrrules22@aol.com</flux:select.option>
                    <flux:select.option>phantomatrix@hotmail.com</flux:select.option>
                </flux:select>
                <flux:textarea label="Bio"
                    description:trailing="You can @mention other users and organizations to link to them."
                    placeholder="Tell us a little bit about yourself" />
                <div class="flex justify-end">
                    <flux:button type="submit" variant="primary">Save profile</flux:button>
                </div>
            </div>
        </div>
        <flux:separator variant="subtle" class="my-8" />
        <div class="flex flex-col lg:flex-row gap-4 lg:gap-6">
            <div class="w-80">
                <flux:heading size="lg">Preferences</flux:heading>
                <flux:subheading>Customize your layout and notification preferences.</flux:subheading>
            </div>
            <div class="flex-1 space-y-6">
                <flux:checkbox.group label="Sidebar" description="Select the items you want to display in the sidebar.">
                    <flux:checkbox value="recents" label="Recents" checked />
                    <flux:checkbox value="home" label="Home" checked />
                    <flux:checkbox value="applications" label="Applications" />
                    <flux:checkbox value="desktop" label="Desktop" />
                </flux:checkbox.group>
                <flux:separator variant="subtle" class="my-8" />
                <flux:radio.group label="Notify me about...">
                    <flux:radio value="all" label="All new messages" checked />
                    <flux:radio value="direct" label="Direct messages and mentions" />
                    <flux:radio value="none" label="Nothing" />
                </flux:radio.group>
                <div class="flex justify-end">
                    <flux:button type="submit" variant="primary">Save preferences</flux:button>
                </div>
            </div>
        </div>
        <flux:separator variant="subtle" class="my-8" />
        <div class="flex flex-col lg:flex-row gap-4 lg:gap-6 pb-10">
            <div class="w-80">
                <flux:heading size="lg">Email notifications</flux:heading>
                <flux:subheading>Choose which emails you'd like to get from us.</flux:subheading>
            </div>
            <div class="flex-1 space-y-6">
                <flux:fieldset class="space-y-4">
                    <flux:switch checked label="Communication emails"
                        description="Receive emails about your account activity." />
                    <flux:separator variant="subtle" />
                    <flux:switch checked label="Marketing emails"
                        description="Receive emails about new products, features, and more." />
                    <flux:separator variant="subtle" />
                    <flux:switch label="Social emails"
                        description="Receive emails for friend requests, follows, and more." />
                    <flux:separator variant="subtle" />
                    <flux:switch label="Security emails"
                        description="Receive emails about your account activity and security." />
                </flux:fieldset>
            </div>
        </div>
    </flux:main>


    <form wire:submit="save" class="space-y-4">
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Namn</label>
            <input wire:model="name" value="{{ $name }}" type="text" id="name"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
            @error('name')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="email" class="block text-sm font-medium text-gray-700">E-post</label>
            <input wire:model="email" type="email" id="email" value="{{ $email }}"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
            @error('email')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="phone" class="block text-sm font-medium text-gray-700">Telefon</label>
            <input wire:model="phone" type="text" id="phone" value="{{ $phone }}"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
            @error('phone')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="address" class="block text-sm font-medium text-gray-700">Adress</label>
            <input wire:model="address" type="text" id="address" value="{{ $address }}"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
            @error('address')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="city" class="block text-sm font-medium text-gray-700">Stad</label>
            <input wire:model="city" type="text" id="city" value="{{ $city }}"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
            @error('city')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="postal_code" class="block text-sm font-medium text-gray-700">Postnummer</label>
            <input wire:model="postal_code" type="text" id="postal_code" value="{{ $postal_code }}"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
            @error('postal_code')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="vat_number" class="block text-sm font-medium text-gray-700">Organisationsnummer</label>
            <input wire:model="vat_number" type="text" id="vat_number" value="{{ $vat_number }}"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
            @error('vat_number')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="reference_name" class="block text-sm font-medium text-gray-700">Referensnamn</label>
            <input wire:model="reference_name" type="text" id="reference_name" value="{{ $reference_name }}"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
            @error('reference_name')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Spara</button>
    </form>

    @if (session()->has('message'))
        <div class="mt-4 p-4 bg-green-100 text-green-700 rounded">
            {{ session('message') }}
        </div>
    @endif
</div>
