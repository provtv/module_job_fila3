<?php

<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> 688d0704 (first)
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Folio\Folio;
<<<<<<< HEAD
use Modules\Xot\Datas\XotData;
=======
>>>>>>> 688d0704 (first)

class FolioServiceProvider extends ServiceProvider
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
        /*
=======
>>>>>>> 688d0704 (first)
        Folio::path(resource_path('views/pages'))->middleware([
            '*' => [
                //
            ],
        ]);
<<<<<<< HEAD
        */
        // -- forse middleware per lang
        // -- spostato in cmsserviceprovider
        /*
        $path = XotData::make()->getPubThemeViewPath('pages');
        Folio::path($path)
            // ->uri('it')
            ->middleware([
                '*' => [
                ],
            ]);
        */
=======
>>>>>>> 688d0704 (first)
    }
}
