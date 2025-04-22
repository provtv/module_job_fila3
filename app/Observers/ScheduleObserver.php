<?php

declare(strict_types=1);

/**
 * @see HusamTariq\FilamentDatabaseSchedule
 */

namespace Modules\Job\Observers;

use Modules\Job\Enums\Status;
use Modules\Job\Models\Schedule;
use Modules\Job\Services\ScheduleService;

class ScheduleObserver
{
    /**
     * Undocumented function.
     */
    public function created(): void
    {
        $this->clearCache();
    }

    /**
     * Undocumented function.
     */
    public function updated(Schedule $schedule): void
    {
        $this->clearCache();
    }

    /**
     * Undocumented function.
     */
    public function deleted(Schedule $schedule): void
    {
        $schedule->status = Status::Trashed;
        $schedule->saveQuietly();
        $this->clearCache();
    }

    /**
     * Undocumented function.
     */
    public function restored(Schedule $schedule): void
    {
        $schedule->status = Status::Inactive;
        $schedule->saveQuietly();
    }

    /**
     * Undocumented function.
     */
    public function saved(Schedule $schedule): void
    {
        $this->clearCache();
    }

    /**
     * Undocumented function.
     *
     * @return void
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a4b668e (.)
    protected function clearCache(): void
    {
        if (config('job::cache.enabled')) {
            $scheduleService = app(ScheduleService::class);
            if ($scheduleService !== null) {
                $scheduleService->clearCache();
            }
<<<<<<< HEAD
=======
=======
    protected function clearCache()
    {
        if (config('job::cache.enabled')) {
            $scheduleService = app(ScheduleService::class);
            $scheduleService->clearCache();
>>>>>>> 0458200 (.)
>>>>>>> a4b668e (.)
        }
    }
}
