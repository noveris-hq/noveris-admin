<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ProjectDetails extends Component
{
    public $id;

    public $project;

    public function mount($id)
    {
        $this->id = $id;
        $this->project = $this->viewProjectDetails($id);
    }

    private function viewProjectDetails($id)
    {
        $project = Auth::user()->projects()->find($id);

        if (! $project) {
            abort(404, 'Project not found.');
        }

        return $project;
    }

    public function render()
    {

        return view('livewire.project-details', [
            'project' => $this->project,
        ]);
    }
}
