<?php

namespace App\Livewire;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('components.layouts.app')]
class DashboardProjects extends Component
{
    use WithPagination;

    public function getPageName(): string
    {
        return $this->pageName;
    }

    public function getProjects(): LengthAwarePaginator
    {
        return auth()->user()->projects()->latest()->paginate(5);
    }

    public function render(): View
    {
        return view('livewire.dashboard.dashboard-projects', [
            'projects' => $this->getProjects(),
        ])->layoutData([
            'title' => 'Noveris Admin | Dashboard',
            'description' => 'Hantera projekt i Noveris Admin.',
        ]);
    }
}
