<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.app')]
class ProjectsList extends Component
{
    public $projects;

    public function mount()
    {
        $this->projects = auth()->user()->projects()->latest()->get();
    }

    public function render()
    {
        return view('livewire.projects.projects-list')->layoutData([
            'title' => 'Noveris Admin | Mina Projekt',
            'description' => 'En översikt över alla dina projekt.',
        ]);
    }
}
