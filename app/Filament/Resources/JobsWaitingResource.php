<?php

/**
 * @see https://github.com/mooxphp/jobs/blob/main/src/resources/JobsWaitingResource.php
 */

declare(strict_types=1);

namespace Modules\Job\Filament\Resources;

use Filament\Forms;
use Modules\Job\Filament\Resources\JobsWaitingResource\Pages\ListJobsWaiting;
use Modules\Job\Filament\Resources\JobsWaitingResource\Widgets\JobsWaitingOverview;
use Modules\Job\Models\Job;
use Modules\Xot\Filament\Resources\XotBaseResource;

class JobsWaitingResource extends XotBaseResource
{
    protected static ?string $model = Job::class;

    protected static bool $shouldRegisterNavigation = true;

    public static function getFormSchema(): array
    {
        return [
            'job_id' => Forms\Components\TextInput::make('job_id')
                ->required()
                ->maxLength(255),
            'name' => Forms\Components\TextInput::make('name')
                ->maxLength(255),
            'queue' => Forms\Components\TextInput::make('queue')
                ->maxLength(255),
            'started_at' => Forms\Components\DateTimePicker::make('started_at'),
            'finished_at' => Forms\Components\DateTimePicker::make('finished_at'),
            'failed' => Forms\Components\Toggle::make('failed')
                ->required(),
            'attempt' => Forms\Components\TextInput::make('attempt')
                ->required(),
            'exception_message' => Forms\Components\Textarea::make('exception_message')
                ->maxLength(65535),
        ];
    }

    public static function getRelations(): array
    {
        return [
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListJobsWaiting::route('/'),
        ];
    }

    public static function getWidgets(): array
    {
        return [
            JobsWaitingOverview::class,
        ];
    }

    /*
    public static function getNavigationBadge(): ?string {
        return JobsWaitingPlugin::make()->getNavigationCountBadge() ? number_format(static::getModel()::count()) : null;
    }

    public static function getModelLabel(): string {
        return JobsWaitingPlugin::make()->getLabel();
    }

    public static function getPluralModelLabel(): string {
        return JobsWaitingPlugin::make()->getPluralLabel();
    }

    public static function getNavigationGroup(): ?string {
        return JobsWaitingPlugin::make()->getNavigationGroup();
    }

    public static function getNavigationSort(): ?int {
        return JobsWaitingPlugin::make()->getNavigationSort();
    }

    public static function getBreadcrumb(): string {
        return JobsWaitingPlugin::make()->getBreadcrumb();
    }

    public static function shouldRegisterNavigation(): bool {
        return JobsWaitingPlugin::make()->shouldRegisterNavigation();
    }

    public static function getNavigationIcon(): string {
        return JobsWaitingPlugin::make()->getNavigationIcon();
    }
    */

    /*
    public static function getNavigationLabel(): string {
        return Str::title(static::getPluralModelLabel());
    }
    */
}
