<?php

/**
 * ---.
 */

declare(strict_types=1);

namespace Modules\Job\Filament\Resources\JobManagerResource\Pages;

use Filament\Actions;
use Filament\Tables\Table;
use Modules\UI\Enums\TableLayoutEnum;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Enums\ActionsPosition;
use Modules\Xot\Filament\Traits\TransTrait;
use Filament\Tables\Actions\DeleteBulkAction;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
use Modules\Job\Filament\Resources\JobManagerResource;

class ListJobManagers extends XotBaseListRecords
{
    protected static string $resource = JobManagerResource::class;





    public function getListTableColumns(): array
    {
        return [
            TextColumn::make('status')
                ->badge()

                ->sortable()
                ->formatStateUsing(static fn (string $state): string => __("jobs::translations.{$state}"))
                ->color(
                    static fn (string $state): string => match ($state) {
                        'running' => 'primary',
                        'succeeded' => 'success',
                        'failed' => 'danger',
                        default => 'secondary',
                    }
                ),
            TextColumn::make('name')

                ->sortable(),
            TextColumn::make('queue')

                ->sortable(),
            TextColumn::make('progress')

                ->formatStateUsing(static fn (string $state): string => "{$state}%")
                ->sortable(),
            // ProgressColumn::make('progress')->color('warning'),
            TextColumn::make('started_at')

                ->since()
                ->sortable(),
        ];
    }

    public function getTableActions(): array
    {
        return [
        ];
    }

    public function getTableBulkActions(): array
    {
        return [
            DeleteBulkAction::make(),
        ];
    }

    
}