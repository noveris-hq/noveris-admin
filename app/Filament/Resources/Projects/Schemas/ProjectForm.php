<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')->label('Projekt Namn')->required(),
                Select::make('status')
                    ->label('Status')
                    ->options([
                        'Pending' => 'Pending',
                        'In progress' => 'In Progress',
                        'Completed' => 'Completed',
                        'On hold' => 'On Hold',
                        'Cancelled' => 'Cancelled',
                    ])
                    ->required(),
                Select::make('customer_id')
                ->label('Kund')
                ->relationship('customer', 'name'),
                TextInput::make('description')->label('Beskrivning'),
            ]);
    }
}
