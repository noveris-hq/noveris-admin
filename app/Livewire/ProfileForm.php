<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Validation\Rule;
use Livewire\Component;

class ProfileForm extends Component
{
    public User $user;

    public string $name;

    public string $email;

    public ?string $phone;

    public ?string $address;

    public ?string $city;

    public ?string $postal_code;

    public ?string $vat_number;

    public ?string $reference_name;

    public function mount()
    {
        $this->user = auth()->user();
        $this->name = $this->user->name;
        $this->email = $this->user->email;
        $this->phone = $this->user->phone;
        $this->address = $this->user->address;
        $this->city = $this->user->city;
        $this->postal_code = $this->user->postal_code;
        $this->vat_number = $this->user->vat_number;
        $this->reference_name = $this->user->reference_name;
    }

    public function save()
    {
        $validated = $this->validate([
            'name' => 'required|string|max:255',
            'email' => ['required', 'email', Rule::unique('users')->ignore($this->user->id)],
            'phone' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'postal_code' => 'nullable|string|max:255',
            'vat_number' => 'nullable|string|max:255',
            'reference_name' => 'nullable|string|max:255',
        ]);

        $this->user->update($validated);

        session()->flash('message', 'Profil uppdaterad!');
    }

    public function render()
    {
        return view('livewire.profile-form');
    }
}
