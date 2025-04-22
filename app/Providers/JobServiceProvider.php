<?php

/**
 * Class Modules\Job\Providers\JobServiceProvider.
 *
 * @see https://github.com/mooxphp/jobs/blob/main/src/JobManagerProvider.php
 */

declare(strict_types=1);

namespace Modules\Job\Providers;

use Filament\Actions\Exports\Models\Export;
use Filament\Actions\Imports\Models\Import;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Queue\Events\JobExceptionOccurred;
use Illuminate\Queue\Events\JobFailed;
use Illuminate\Queue\Events\JobProcessed;
use Illuminate\Queue\Events\JobProcessing;
use Illuminate\Support\Facades\Queue;
use Illuminate\Support\Facades\Schema;
use Modules\Job\Events\Executed;
use Modules\Job\Events\Executing;
use Modules\Job\Models\Task;
use Modules\Xot\Providers\XotBaseServiceProvider;

class JobServiceProvider extends XotBaseServiceProvider
{
    public string $name = 'Job';

    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;

    public function boot(): void
    {
        parent::boot();
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> a4b668e (.)
        /*
            $this->app->resolving(Schedule::class, function ($schedule) {
                dddx($schedule);
                //
            });
            */
        // $this->app->booted(function () {
        // $schedule = $this->app->make(Schedule::class);
        // try {
        //    $this->registerSchedule($schedule);
        // } catch (\Illuminate\Database\QueryException $e) {
        //    echo $e->getMessage();
        // }
        // });
<<<<<<< HEAD
>>>>>>> origin/dev
>>>>>>> origin/dev
=======
>>>>>>> a4b668e (.)
        Import::polymorphicUserRelationship();
        Export::polymorphicUserRelationship();
        $this->registerQueue();
    }

    public function registerQueue(): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> origin/dev
=======
>>>>>>> a4b668e (.)
        Queue::before(function (JobProcessing $event) {
            $this->jobStarted($event->job);
=======
        /*
        Queue::before(static function (JobProcessing $event) {
           self::jobStarted($event->job);
>>>>>>> 410dbb3 (.)
        });

        Queue::after(static function (JobProcessed $event) {
           self::jobFinished($event->job);
        });

        Queue::failing(static function (JobFailed $event) {
           self::jobFinished($event->job, true, $event->exception);
        });

        Queue::exceptionOccurred(static function (JobExceptionOccurred $event) {
           self::jobFinished($event->job, true, $event->exception);
        });
        */
    }

    /**
     * @param \Illuminate\Contracts\Queue\Job $job
     */
    protected function jobStarted($job): void
    {
        // Implementazione del metodo jobStarted
        // Per ora lo lasciamo vuoto in attesa di implementazione specifica
    }

    /**
     * @param \Illuminate\Contracts\Queue\Job $job
     * @param bool $failed
     * @param \Throwable|null $exception
     */
    protected function jobFinished($job, bool $failed = false, ?\Throwable $exception = null): void
    {
        // Implementazione del metodo jobFinished
        // Per ora lo lasciamo vuoto in attesa di implementazione specifica
    }

<<<<<<< HEAD
    public function registerSchedule(Schedule $schedule): void 
    {
<<<<<<< HEAD
=======
=======
    public function registerSchedule(Schedule $schedule): void
    {
<<<<<<< HEAD
>>>>>>> a4b668e (.)
=======
        /*
        Queue::before(static function (JobProcessing $event) {
           self::jobStarted($event->job);
        });

        Queue::after(static function (JobProcessed $event) {
           self::jobFinished($event->job);
        });

        Queue::failing(static function (JobFailed $event) {
           self::jobFinished($event->job, true, $event->exception);
        });

        Queue::exceptionOccurred(static function (JobExceptionOccurred $event) {
           self::jobFinished($event->job, true, $event->exception);
        });
        */
    }

    /*
    public function registerSchedule(Schedule $schedule): void {
<<<<<<< HEAD
>>>>>>> origin/dev
>>>>>>> origin/dev
=======
>>>>>>> 0458200 (.)
>>>>>>> a4b668e (.)
=======
>>>>>>> 410dbb3 (.)
        if (Schema::hasTable('tasks')) {
            $tasks = app(Task::class)
                ->query()
                ->with('frequencies')
                ->where('is_active', true)
                ->get();

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> origin/dev
=======
>>>>>>> a4b668e (.)
            $tasks->each(function ($task) use ($schedule) {
                if (! $task instanceof Task) {
                    throw new \Exception('['.__LINE__.']['.class_basename($this).']');
                }

                $parameters = $task->compileParameters(true);
                if (!is_array($parameters)) {
                    $parameters = [];
                }

                $event = $schedule->command($task->command, $parameters);
<<<<<<< HEAD
                
=======

>>>>>>> a4b668e (.)
                $event->{$task->expression}()
                    ->name($task->description)
                    ->timezone($task->timezone)
                    ->before(function () use ($task) {
                        Executing::dispatch($task);
                    })
                    ->thenWithOutput(function ($output) use ($event, $task) {
                        Executed::dispatch($task, $event->start ?? microtime(true), $output);
                    });

                if ($task->dont_overlap) {
                    $event->withoutOverlapping();
                }
                if ($task->run_in_maintenance) {
                    $event->evenInMaintenanceMode();
                }
                if ($task->run_on_one_server && in_array(config('cache.default'), ['memcached', 'redis', 'database', 'dynamodb'])) {
                    $event->onOneServer();
                }
                if ($task->run_in_background) {
                    $event->runInBackground();
                }
            });
        }
    }
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> a4b668e (.)
=======
=======
>>>>>>> 410dbb3 (.)
            $tasks->each(
                function ($task) use ($schedule) {
                    if (! $task instanceof Task) {
                        throw new \Exception('['.__LINE__.']['.class_basename($this).']');
                    }
                    //
                    // var \Illuminate\Console\Scheduling\Event
                    //
                    $event = $schedule->command($task->command, $task->compileParameters(true));
                    // --- funziona solo con daily per ora
                    $event->{$task->expression}()
                        ->name($task->description)
                        ->timezone($task->timezone)
                        ->before(function () use ($task) {
                            //Access to an undefined property Illuminate\Console\Scheduling\Event::$start.
                            //$event->start = microtime(true);
                            Executing::dispatch($task);
                        })
                        ->thenWithOutput(function ($output) use ($event, $task) {
                            Executed::dispatch($task, $event->start ?? microtime(true), $output);
                        });
                    if ($task->dont_overlap) {
                        $event->withoutOverlapping();
                    }
                    if ($task->run_in_maintenance) {
                        $event->evenInMaintenanceMode();
                    }
                    if ($task->run_on_one_server && in_array(config('cache.default'), ['memcached', 'redis', 'database', 'dynamodb'])) {
                        $event->onOneServer();
                    }
                    if ($task->run_in_background) {
                        $event->runInBackground();
                    }
                });
        }
    }
<<<<<<< HEAD
    */
<<<<<<< HEAD
>>>>>>> origin/dev
>>>>>>> origin/dev
=======
>>>>>>> 0458200 (.)
>>>>>>> a4b668e (.)
=======
>>>>>>> 410dbb3 (.)
}
