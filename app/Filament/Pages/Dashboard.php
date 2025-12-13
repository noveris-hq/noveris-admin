<?php

namespace App\Filament\Pages;

use Filament\Pages\Dashboard as BaseDashboard;

class Dashboard extends BaseDashboard
{
    protected static ?string $navigationLabel = 'Startsida';

    protected static ?string $title = 'Startsida';

    public function canAccessPanel(): bool
    {
        info('Välkommen till administrationspanelen!
            Här kan du hantera projekt, kunder och användare effektivt.
            Använd navigationsmenyn för att komma åt olika sektioner och
            utforska funktionerna som erbjuds för att underlätta ditt arbete.');

        return $this->is_admin;
    }
}
