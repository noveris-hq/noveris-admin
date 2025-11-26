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
                        TextEntry::make('customer.name')->label('Kund Namn'),
                        TextEntry::make('status')->label('Status'),
                        TextEntry::make('created_at')->label('Created At')->dateTime(),
                        TextEntry::make('updated_at')->label('Updated At')->dateTime(),
                    ])->columns(2),
            ]);
    }
}
