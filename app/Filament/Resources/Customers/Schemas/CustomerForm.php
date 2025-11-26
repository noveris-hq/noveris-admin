<?php

namespace App\Filament\Resources\Customers\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CustomerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Kund information')
                    ->schema([
                        TextInput::make('name')->label('Namn')->required(),
                        TextInput::make('email')->label('E-post')->email()->required(),
                        TextInput::make('phone')->label('Telefon')->tel(),
                        TextInput::make('address')->label('Adress'),
                        TextInput::make('city')->label('Stad'),
                        TextInput::make('postal_code')->label('Postnummer'),
                        TextInput::make('organization_number')->label('Organisationsnummer'),
                        TextInput::make('referral_source')->label('Hur hörde du om oss?'),
                    ])->columns(2),
            ]);
    }
}
