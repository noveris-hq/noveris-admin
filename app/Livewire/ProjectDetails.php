<?php

namespace App\Livewire;

use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.app')]
class ProjectDetails extends Component
{
    public $project;

    public function mount(Project $project): void
    {
        $this->viewProjectDetails($project->id);
    }

    private function viewProjectDetails($id): Project
    {
        $this->project = Auth::user()->projects()->find($id);

        if (! $this->project) {
            abort(404, 'Project not found.');
        }

        return $this->project;
    }

    public function render(): View
    {
        return view('livewire.projects.project-details')->layoutData([
            'title' => 'Noveris Admin | Projekt detaljer för - '.$this->project->name,
            'description' => 'Detaljer för projektet '.$this->project->name,
        ]);
    }
}
