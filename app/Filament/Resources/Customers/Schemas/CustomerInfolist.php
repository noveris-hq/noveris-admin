<?php

namespace App\Filament\Resources\Customers\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class CustomerInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name')->label('Namn'),
                TextEntry::make('email')->label('E-post'),
                TextEntry::make('phone')->label('Telefon'),
                TextEntry::make('address')->label('Adress'),
                TextEntry::make('city')->label('Stad'),
                TextEntry::make('postal_code')->label('Postnummer'),
                TextEntry::make('organization_number')->label('Organisationsnummer'),
                TextEntry::make('referral_source')->label('Hur hörde du om oss?'),
            ])->columns(2);
    }
}
