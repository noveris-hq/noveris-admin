<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ViewProject extends Component
{
    public function getProject()
    {
        return Auth::user()->projects()->latest()->first();
    }

    public function render()
    {
        return view('livewire.view-project');
    }
}
