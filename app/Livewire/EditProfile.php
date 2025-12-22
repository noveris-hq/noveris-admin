<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;
use Livewire\Component;

class EditProfile extends Component
{
    public ?User $user = null;

    #[Validate('required|string|max:255')]
    public string $name = '';

    public string $email = '';

    public ?string $phone = '';

    public ?string $address = '';

    public ?string $city = '';

    public ?string $postal_code = '';

    public ?string $vat_number = '';

    public ?string $reference_name = '';

    public function mount()
    {
        $this->user = auth()->user();

        if ($this->user) {
            $this->name = (string) ($this->user->name ?? '');
            $this->email = (string) ($this->user->email ?? '');
            $this->phone = (string) ($this->user->phone ?? '');
            $this->address = (string) ($this->user->address ?? '');
            $this->city = (string) ($this->user->city ?? '');
            $this->postal_code = (string) ($this->user->postal_code ?? '');
            $this->vat_number = (string) ($this->user->vat_number ?? '');
            $this->reference_name = (string) ($this->user->reference_name ?? '');
        }
    }

    public function save(): void
    {
        // Validate incoming fields
        // !TODO refactor the validation and assign rules to properties instead
        $validated = $this->validate([
            'name' => 'required|string|max:255',
            'email' => ['required', 'email', Rule::unique('users', 'email')->ignore($this->user?->id)],
            'phone' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'postal_code' => 'nullable|string|max:255',
            'vat_number' => 'nullable|string|max:255',
            'reference_name' => 'nullable|string|max:255',
        ]);

        // And make use of this instead
        /* $this->validate(); */

        $this->dispatch('user-name-updated', name: $this->name);

        // Update the authenticated user
        $this->user?->update($validated);

        session()->flash('message', 'Profil uppdaterad!');
    }

    public function render()
    {
        return view('livewire.profile.profile-form');
    }
}
