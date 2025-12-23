<?php

namespace App\Filament\Pages;

use App\Models\Task;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;
use Relaticle\Flowforge\Board;
use Relaticle\Flowforge\BoardPage;
use Relaticle\Flowforge\Column;

class TaskBoard extends BoardPage
{
    protected static string|null|\BackedEnum $navigationIcon = 'heroicon-o-view-columns';

    protected static ?string $navigationLabel = 'Task Board';

    protected static ?string $title = 'Task Board';

    public function board(Board $board): Board
    {
        return $board
            ->query($this->getEloquentQuery())
            ->recordTitleAttribute('title')
            ->columnIdentifier('status')
            ->positionIdentifier('position') // Enable drag-and-drop with position field
            ->columns([
                Column::make('todo')->label('To Do')->color('gray'),
                Column::make('in_progress')->label('In Progress')->color('blue'),
                Column::make('completed')->label('Completed')->color('green'),
            ])
            ->cardSchema(fn (Schema $schema) => $schema->components([
                TextEntry::make('description')
                    ->formatStateUsing(fn ($state) => Str::words(strip_tags($state), 10))
                    ->label('Description'),
                TextEntry::make('priority')
                    ->badge()
                    ->formatStateUsing(fn (string $state): string => ucfirst($state))
                    ->color(fn ($state) => match ($state) {
                        'high' => 'danger',
                        'medium' => 'warning',
                        'low' => 'success',
                        default => 'gray'
                    }),
                TextEntry::make('due_date')->date('j F Y')->icon('heroicon-o-calendar'),
            ]))
            ->cardActions([
                EditAction::make()
                    ->form(fn (Schema $schema) => $schema->components($this->getTaskFormSchema()))
                    ->model(Task::class),
                DeleteAction::make()->model(Task::class),
            ])
            ->cardAction('edit')
            ->columnActions([
                CreateAction::make()
                    ->label('Add Task')
                    ->model(Task::class)
                    ->form(fn (Schema $schema) => $schema->components($this->getTaskFormSchema()))
                    ->mutateDataUsing(function (array $data, array $arguments): array {
                        if (isset($arguments['column'])) {
                            $data['status'] = $arguments['column'];
                            $data['position'] = $this->getBoardPositionInColumn($arguments['column']);
                        }

                        return $data;
                    }),
            ]);
    }

    /**
     * Remove duplication by defining the task form schema in a separate method.
     */
    private function getTaskFormSchema(): array
    {
        return [
            TextInput::make('title')->required()->label('Title'),
            Select::make('priority')
                ->options([
                    'low' => 'Low',
                    'medium' => 'Medium',
                    'high' => 'High',
                ])
                ->required()
                ->label('Priority'),
            DatePicker::make('due_date')->native(false)
                ->displayFormat('d F Y')
                ->label('Due Date'),
            RichEditor::make('description')->label('Description'),
        ];
    }

    /**
     * @return Builder<Task>
     */
    public function getEloquentQuery(): Builder
    {
        return Task::query();
    }
}
