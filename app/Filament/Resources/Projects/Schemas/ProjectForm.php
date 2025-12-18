<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\MarkdownEditor;
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
                TextInput::make('start_date')
                    ->label('Startdatum')
                    ->type('date')
                    ->required(),
                TextInput::make('end_date')
                    ->label('Slutdatum')
                    ->type('date')
                    ->required(),
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
                Select::make('user_id')
                    ->label('Kund')
                    ->relationship('user', 'name'),
                /* TextInput::make('description')->label('Beskrivning'), */
                MarkdownEditor::make('description')
                    ->required()
                    ->columnSpan(2)
                    ->helperText('Supports Markdown syntax with live preview'),
            ]);
    }
}
