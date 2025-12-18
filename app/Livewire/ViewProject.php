<?php

namespace App\Livewire;

use Livewire\Component;

class ViewProject extends Component
{
    public $project;

    public function mount()
    {
        $this->project = $this->getProject();
    }

    private function getProject()
    {
        return auth()->user()->projects()->latest()->first();
    }

    public function render()
    {
        return view('livewire.view-project', [
            'project' => $this->project,
        ]);
    }
}
