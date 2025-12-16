<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                DateTimePicker::make('email_verified_at'),
                TextInput::make('phone')->label('Telefon')->tel(),
                TextInput::make('address')->label('Adress'),
                TextInput::make('city')->label('Stad'),
                TextInput::make('postal_code')->label('Postnummer'),
                TextInput::make('vat_number')->label('Organisationsnummer'),
                TextInput::make('reference_name')->label('Referensnamn'),
                /* TextInput::make('password') */
                /*     ->password() */
                /*     ->required(), */
                /* Textarea::make('two_factor_secret') */
                /*     ->default(null) */
                /*     ->columnSpanFull(), */
                /* Textarea::make('two_factor_recovery_codes') */
                /*     ->default(null) */
                /*     ->columnSpanFull(), */
                /* DateTimePicker::make('two_factor_confirmed_at'), */
            ]);
    }
}
