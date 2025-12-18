<?php

namespace App\Filament\Resources\Projects\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;

class ProjectsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Projekt namn')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('user.name')->label('Kund')->sortable()->searchable(),
                TextColumn::make('start_date')->label('Startdatum')->date()->sortable(),
                TextColumn::make('end_date')->label('Slutdatum')->date()->sortable(),
                TextColumn::make('status')->label('Status')->sortable()->searchable(),
                /* TextColumn::make('created_at')->label('Created At')->dateTime()->sortable(), */
                /* TextColumn::make('updated_at')->label('Updated At')->dateTime()->sortable(), */
            ])
            ->filters([
                TrashedFilter::make(),
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    ForceDeleteBulkAction::make(),
                    RestoreBulkAction::make(),
                ]),
            ]);
    }
}
