<?php

namespace App\Livewire;

use Livewire\Component;

class ProjectsList extends Component
{
    public $projects;

    public function mount()
    {
        $this->projects = auth()->user()->projects()->latest()->get();
    }

    public function render()
    {
        return view('livewire.projects-list', [
            'projects' => $this->projects,
        ]);
    }
}
