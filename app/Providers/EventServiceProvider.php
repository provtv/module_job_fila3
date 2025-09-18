<?php

declare(strict_types=1);

<<<<<<< HEAD
namespace Modules\Job\Providers;
=======
namespace Modules\Xot\Providers;
>>>>>>> 229d0d51 (Squashed 'laravel/Modules/Xot/' content from commit 1e7f566e)

use Illuminate\Foundation\Support\Providers\EventServiceProvider as BaseEventServiceProvider;

class EventServiceProvider extends BaseEventServiceProvider
{
    /**
     * The event handler mappings for the application.
     *
     * @var array<string, array<int, string>>
     */
    protected $listen = [];

    /**
     * Indicates if events should be discovered.
     *
     * @var bool
     */
    protected static $shouldDiscoverEvents = true;

    /**
     * Configure the proper event listeners for email verification.
     */
<<<<<<< HEAD
    protected function configureEmailVerification(): void {}
=======
    protected function configureEmailVerification(): void
    {
    }
>>>>>>> 229d0d51 (Squashed 'laravel/Modules/Xot/' content from commit 1e7f566e)
}
