<?php

declare(strict_types=1);

return [
<<<<<<< HEAD
    'name' => 'Job',
    'description' => 'Modulo per la gestione dei lavori in background e code',
    'icon' => 'heroicon-o-queue-list',
    'navigation' => [
        'enabled' => true,
        'sort' => 40,
=======
    'name' => 'Xot',
    'description' => 'Modulo base con funzionalità core e utilities',
    'icon' => 'heroicon-o-cube',
    'navigation' => [
        'enabled' => true,
        'sort' => 110,
>>>>>>> 229d0d51 (Squashed 'laravel/Modules/Xot/' content from commit 1e7f566e)
    ],
    'routes' => [
        'enabled' => true,
        'middleware' => ['web', 'auth'],
    ],
    'providers' => [
<<<<<<< HEAD
        'Modules\\Job\\Providers\\JobServiceProvider',
=======
        'Modules\\Xot\\Providers\\XotServiceProvider',
>>>>>>> 229d0d51 (Squashed 'laravel/Modules/Xot/' content from commit 1e7f566e)
    ],
];
