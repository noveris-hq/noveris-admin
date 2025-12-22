<?php

namespace App\Livewire;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.app')]
class ProjectsList extends Component
{
    public Collection $projects;

    public function mount(): void
    {
        $this->projects = auth()->user()->projects()->latest()->get();
    }

    public function render(): View
    {
        return view('livewire.projects.projects-list')->layoutData([
            'title' => 'Noveris Admin | Mina Projekt',
            'description' => 'En översikt över alla dina projekt.',
        ]);
    }
}
