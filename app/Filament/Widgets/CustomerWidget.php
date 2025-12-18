<?php

namespace App\Filament\Widgets;

use App\Models\Project;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class CustomerWidget extends StatsOverviewWidget
{
    protected ?string $pollingInterval = null;

    protected function getStats(): array
    {
        return [
            Stat::make('Aktivt projekt', Project::where('status', 'in_progress')->count())
                ->description('Projekt som pågår för närvarande')
                ->color('success'),

            Stat::make('Avslutade projekt', Project::where('status', 'completed')->count())
                ->description('Projekt som har slutförts')
                ->color('secondary'),
        ];
    }
}
