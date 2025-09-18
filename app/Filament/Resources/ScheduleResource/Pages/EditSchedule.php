<?php

declare(strict_types=1);

namespace Modules\Job\Filament\Resources\ScheduleResource\Pages;

use Filament\Forms\Form;
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2e199498 (.)
use Filament\Notifications\Notification;
use Illuminate\Support\Collection;
use Illuminate\Validation\ValidationException;
use Modules\Job\Filament\Resources\ScheduleResource;
use Modules\Xot\Filament\Traits\NavigationPageLabelTrait;
use Webmozart\Assert\Assert;

class EditSchedule extends \Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord
{
    use NavigationPageLabelTrait;
<<<<<<< HEAD
=======
use Webmozart\Assert\Assert;
use Illuminate\Support\Collection;
use Filament\Notifications\Notification;
use Illuminate\Validation\ValidationException;
use Modules\Job\Filament\Resources\ScheduleResource;
use Modules\Xot\Filament\Traits\NavigationPageLabelTrait;
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;

class EditSchedule extends XotBaseEditRecord
{
    
>>>>>>> de0f89b5 (.)
=======
>>>>>>> 2e199498 (.)

    public Collection $commands;

    protected static string $resource = ScheduleResource::class;

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2e199498 (.)
    public function getformSchema(): array
    {
        Assert::isArray($res = $this->getResource()::getFormSchema());

        return $res;
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema($this->getFormSchema());
    }
<<<<<<< HEAD
=======
    
>>>>>>> de0f89b5 (.)
=======
>>>>>>> 2e199498 (.)

    protected function onValidationError(ValidationException $exception): void
    {
        Notification::make()
            ->title($exception->getMessage())
            ->danger()
            ->send();
    }

    // protected function getRedirectUrl(): string
    // {
    //    return $this->getResource()::getUrl('index');
    // }
}
