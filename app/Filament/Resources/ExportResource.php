<?php

declare(strict_types=1);

namespace Modules\Job\Filament\Resources;

use Modules\Job\Filament\Resources\ExportResource\Pages;
use Modules\Job\Models\Export;
use Modules\Xot\Filament\Resources\XotBaseResource;

class ExportResource extends XotBaseResource
{
    protected static ?string $model = Export::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getFormSchema(): array
    {
        return [
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a4b668e (.)
=======
>>>>>>> 410dbb3 (.)
            'name' => \Filament\Forms\Components\TextInput::make('name')
                ->required()
                ->maxLength(255),
            'type' => \Filament\Forms\Components\Select::make('type')
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
            \Filament\Forms\Components\TextInput::make('name')
                ->required()
                ->maxLength(255),
            \Filament\Forms\Components\Select::make('type')
>>>>>>> 0458200 (.)
>>>>>>> a4b668e (.)
=======
>>>>>>> 410dbb3 (.)
                ->required()
                ->options([
                    'csv' => 'CSV',
                    'excel' => 'Excel',
                    'pdf' => 'PDF',
                ])
                ->default('csv'),
            'status' => \Filament\Forms\Components\Select::make('status')
<<<<<<< HEAD
=======
<<<<<<< HEAD
            'status' => \Filament\Forms\Components\Select::make('status')
=======
            \Filament\Forms\Components\Select::make('status')
>>>>>>> 0458200 (.)
>>>>>>> a4b668e (.)
=======
>>>>>>> 410dbb3 (.)
                ->required()
                ->options([
                    'pending' => 'Pending',
                    'processing' => 'Processing',
                    'completed' => 'Completed',
                    'failed' => 'Failed',
                ])
                ->default('pending'),
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a4b668e (.)
=======
>>>>>>> 410dbb3 (.)
            'error_message' => \Filament\Forms\Components\Textarea::make('error_message')
                ->maxLength(65535)
                ->columnSpanFull(),
            'created_at' => \Filament\Forms\Components\DateTimePicker::make('created_at')
                ->disabled(),
            'updated_at' => \Filament\Forms\Components\DateTimePicker::make('updated_at')
                ->disabled(),
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
            \Filament\Forms\Components\Textarea::make('error_message')
                ->maxLength(65535),
            \Filament\Forms\Components\TextInput::make('total_records')
                ->numeric(),
            \Filament\Forms\Components\TextInput::make('processed_records')
                ->numeric(),
            \Filament\Forms\Components\TextInput::make('file_path')
                ->maxLength(255),
            \Filament\Forms\Components\DateTimePicker::make('completed_at'),
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListExports::route('/'),
            'create' => Pages\CreateExport::route('/create'),
            'edit' => Pages\EditExport::route('/{record}/edit'),
>>>>>>> 0458200 (.)
>>>>>>> a4b668e (.)
=======
>>>>>>> 410dbb3 (.)
        ];
    }
}
