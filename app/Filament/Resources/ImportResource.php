<?php

declare(strict_types=1);

namespace Modules\Job\Filament\Resources;

use Modules\Job\Filament\Resources\ImportResource\Pages;
use Modules\Job\Models\Import;
use Modules\Xot\Filament\Resources\XotBaseResource;

class ImportResource extends XotBaseResource
{
    protected static ?string $model = Import::class;

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a4b668e (.)
=======
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

>>>>>>> 410dbb3 (.)
    public static function getFormSchema(): array
    {
        return [
            'name' => \Filament\Forms\Components\TextInput::make('name')
                ->required()
                ->maxLength(255),
            'file' => \Filament\Forms\Components\FileUpload::make('file')
                ->required()
                ->acceptedFileTypes(['text/csv', 'application/vnd.ms-excel', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'])
                ->maxSize(10240),
            'status' => \Filament\Forms\Components\Select::make('status')
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getFormSchema(): array
    {
        return [
            \Filament\Forms\Components\TextInput::make('name')
                ->required()
                ->maxLength(255),
            \Filament\Forms\Components\FileUpload::make('file')
                ->required()
                ->acceptedFileTypes(['text/csv', 'application/vnd.ms-excel', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'])
                ->maxSize(10240),
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
                ->maxLength(65535),
            'total_rows' => \Filament\Forms\Components\TextInput::make('total_rows')
                ->numeric(),
            'processed_rows' => \Filament\Forms\Components\TextInput::make('processed_rows')
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
            \Filament\Forms\Components\Textarea::make('error_message')
                ->maxLength(65535),
            \Filament\Forms\Components\TextInput::make('total_rows')
                ->numeric(),
            \Filament\Forms\Components\TextInput::make('processed_rows')
                ->numeric(),
            \Filament\Forms\Components\TextInput::make('failed_rows')
>>>>>>> 0458200 (.)
>>>>>>> a4b668e (.)
=======
                ->numeric(),
            'failed_rows' => \Filament\Forms\Components\TextInput::make('failed_rows')
>>>>>>> 410dbb3 (.)
                ->numeric(),
        ];
    }

    public static function getRelations(): array
    {
        return [
        ];
    }
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 410dbb3 (.)

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListImports::route('/'),
            'create' => Pages\CreateImport::route('/create'),
            'edit' => Pages\EditImport::route('/{record}/edit'),
        ];
    }
<<<<<<< HEAD
>>>>>>> 0458200 (.)
>>>>>>> a4b668e (.)
=======
>>>>>>> 410dbb3 (.)
}
