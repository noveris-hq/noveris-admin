<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ViewProject extends Component
{

    public function getProject() {
        $user = Auth::user();
        if($user || !$user->customer) {
            return null;
        }
        return $user->customer()->projects()->latest()->first();
    }

    public function render()
    {
        return view('livewire.view-project');
    }
}
