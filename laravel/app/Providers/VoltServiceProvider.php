<?php

<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> 688d0704 (first)
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Livewire\Volt\Volt;
<<<<<<< HEAD
use Modules\Xot\Datas\XotData;
=======
>>>>>>> 688d0704 (first)

class VoltServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
<<<<<<< HEAD
=======
        //
>>>>>>> 688d0704 (first)
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
<<<<<<< HEAD
        $xot = XotData::make();
        Volt::mount([
            $xot->getPubThemeViewPath('livewire'),
            $xot->getPubThemeViewPath('pages'),
            // config('livewire.view_path', resource_path('views/livewire')),
            // resource_path('views/pages'),
=======
        Volt::mount([
            config('livewire.view_path', resource_path('views/livewire')),
            resource_path('views/pages'),
>>>>>>> 688d0704 (first)
        ]);
    }
}
