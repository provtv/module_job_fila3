<?php

/**
 * @see https://gitlab.com/amvisor/filament-failed-jobs/-/blob/master/src/resources/JobBatchesResource.php?ref_type=heads
 */

declare(strict_types=1);

namespace Modules\Job\Filament\Resources;

use Modules\Job\Filament\Resources\JobBatchResource\Pages\ListJobBatches;
use Modules\Job\Models\JobBatch;
use Modules\Xot\Filament\Resources\XotBaseResource;

class JobBatchResource extends XotBaseResource
{
    // //

    // protected static ?string $model = JobBatch::class;

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a4b668e (.)
=======
>>>>>>> 410dbb3 (.)
    public static function getFormSchema(): array
    {
        return [
            'id' => \Filament\Forms\Components\TextInput::make('id')
                ->required()
                ->maxLength(255),
            'name' => \Filament\Forms\Components\TextInput::make('name')
                ->required()
                ->maxLength(255),
            'total_jobs' => \Filament\Forms\Components\TextInput::make('total_jobs')
                ->numeric()
                ->required(),
            'pending_jobs' => \Filament\Forms\Components\TextInput::make('pending_jobs')
                ->numeric()
                ->required(),
            'failed_jobs' => \Filament\Forms\Components\TextInput::make('failed_jobs')
                ->numeric()
                ->required(),
            'failed' => \Filament\Forms\Components\Toggle::make('failed')
                ->required(),
            'options' => \Filament\Forms\Components\Textarea::make('options')
                ->maxLength(65535),
            'created_at' => \Filament\Forms\Components\DateTimePicker::make('created_at')
                ->required(),
            'cancelled_at' => \Filament\Forms\Components\DateTimePicker::make('cancelled_at'),
            'finished_at' => \Filament\Forms\Components\DateTimePicker::make('finished_at'),
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
    protected static ?string $navigationIcon = 'heroicon-o-queue-list';

    public static function getFormSchema(): array
    {
        return [
            \Filament\Forms\Components\TextInput::make('id')
                ->required()
                ->maxLength(255),
            \Filament\Forms\Components\TextInput::make('name')
                ->required()
                ->maxLength(255),
            \Filament\Forms\Components\TextInput::make('total_jobs')
                ->numeric()
                ->required(),
            \Filament\Forms\Components\TextInput::make('pending_jobs')
                ->numeric()
                ->required(),
            \Filament\Forms\Components\TextInput::make('failed_jobs')
                ->numeric()
                ->required(),
            \Filament\Forms\Components\Toggle::make('failed')
                ->required(),
            \Filament\Forms\Components\Textarea::make('options')
                ->maxLength(65535),
            \Filament\Forms\Components\DateTimePicker::make('created_at')
                ->required(),
            \Filament\Forms\Components\DateTimePicker::make('cancelled_at'),
            \Filament\Forms\Components\DateTimePicker::make('finished_at'),
>>>>>>> 0458200 (.)
>>>>>>> a4b668e (.)
=======
>>>>>>> 410dbb3 (.)
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListJobBatches::route('/'),
        ];
    }
}
