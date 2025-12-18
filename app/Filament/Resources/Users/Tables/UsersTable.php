<?php

namespace App\Filament\Resources\Users\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class UsersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable(),
                /* TextColumn::make('email') */
                /*     ->label('Email address') */
                /*     ->searchable(), */
                /* TextColumn::make('email_verified_at') */
                /*     ->dateTime() */
                /*     ->sortable(), */
                TextColumn::make('phone')->label('Telefon'),
                /* TextColumn::make('address')->label('Adress'), */
                TextColumn::make('city')->label('Stad'),
                /* TextColumn::make('postal_code')->label('Postnummer'), */
                /* TextColumn::make('vat_number')->label('Organisationsnummer'), */
                TextColumn::make('reference_name')->label('Referensnamn'),
                TextColumn::make('projects_count')
                    ->label('Antal projekt')
                    ->counts('projects')
                    ->badge()
                    ->color('primary'),
                /* TextColumn::make('two_factor_confirmed_at') */
                /*     ->dateTime() */
                /*     ->sortable(), */
                /*     TextColumn::make('created_at') */
                /*         ->dateTime() */
                /*         ->sortable() */
                /*         ->toggleable(isToggledHiddenByDefault: true), */
                /*     TextColumn::make('updated_at') */
                /*         ->dateTime() */
                /*         ->sortable() */
                /*         ->toggleable(isToggledHiddenByDefault: true), */
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
