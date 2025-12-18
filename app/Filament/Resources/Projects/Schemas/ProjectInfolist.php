<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ProjectInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Projekt Information')
                    ->schema([
                        TextEntry::make('name')->label('Projekt Namn'),
                        TextEntry::make('start_date')->label('Startdatum')->date(),
                        TextEntry::make('end_date')->label('Slutdatum')->date(),
                        TextEntry::make('user.name')->label('Kundens namn'),
                        TextEntry::make('status')->label('Status'),
                        TextEntry::make('description')->label('Beskrivning')->markdown(),
                        TextEntry::make('created_at')->label('Created At')->dateTime(),
                        TextEntry::make('updated_at')->label('Updated At')->dateTime(),
                    ])->columns(2),
            ]);
    }
}
