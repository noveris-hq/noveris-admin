<?php

namespace App\Filament\Widgets;

use App\Models\Customer;
use App\Models\Project;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class CustomerWidget extends StatsOverviewWidget
{
    protected ?string $pollingInterval = null;

    protected function getStats(): array
    {
        return [
            Stat::make('Antal kunder', Customer::count())
                ->description('Totalt antal registrerade kunder')
                ->color('primary'),

            Stat::make('Aktivt projekt', Project::where('status', 'in_progress')->count())
                ->description('Projekt som pågår för närvarande')
                ->color('success'),

            Stat::make('Nya kunder', Customer::where('created_at', '>=', now()->subMonth())->count())
                ->description('Kunder registrerade senaste månaden')
                ->color('warning'),
        ];
    }
}
