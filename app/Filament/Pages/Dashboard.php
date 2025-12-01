<?php

namespace App\Filament\Pages;

use Filament\Pages\Dashboard as BaseDashboard;

class Dashboard extends BaseDashboard
{
    protected static ?string $navigationLabel = 'Startsida';

    protected static ?string $title = 'Startsida';

    public function canAccessPanel(): bool
    {
        return $this->is_admin;
    }
}
