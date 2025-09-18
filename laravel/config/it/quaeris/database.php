<?php

declare(strict_types=1);
<<<<<<< HEAD
use Modules\Tenant\Services\TenantService;
=======
>>>>>>> 688d0704 (first)

return [
    'connections' => [
        'mysql' => [
            'driver' => 'mysql',
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'forge7'),
            'username' => env('DB_USERNAME', 'forge8'),
            'password' => env('DB_PASSWORD', ''),
<<<<<<< HEAD
            // 'unix_socket' => '/Applications/MAMP/tmp/mysql/mysql.sock',
=======
            //'unix_socket' => '/Applications/MAMP/tmp/mysql/mysql.sock',
>>>>>>> 688d0704 (first)
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'strict' => false,
            'engine' => null,
        ],

        'liveuser_general' => [
            'driver' => 'mysql',
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
<<<<<<< HEAD
            // 'unix_socket' => '/Applications/MAMP/tmp/mysql/mysql.sock',
=======
            //'unix_socket' => '/Applications/MAMP/tmp/mysql/mysql.sock',
>>>>>>> 688d0704 (first)
            'database' => env('DB_DATABASE_USER', 'forge9'),
            'username' => env('DB_USERNAME', 'forge10'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => 'liveuser_',
            'strict' => false,
            'engine' => null,
        ],

        'sqlite' => [
            'driver' => 'sqlite',
            'url' => env('DATABASE_URL'),
            'database' => env('DB_DATABASE', database_path('database.sqlite')),
            'prefix' => '',
            'foreign_key_constraints' => env('DB_FOREIGN_KEYS', true),
        ],
<<<<<<< HEAD

        'orbit' => [
            'driver' => 'sqlite',
            'database' => TenantService::filePath('orbit.sqlite'),
            'foreign_key_constraints' => false,
        ],
        'orbit_meta' => [
            'driver' => 'sqlite',
            'database' => storage_path('framework/cache/orbit/orbit_meta.sqlite'),
            'foreign_key_constraints' => false,
        ],
    ], // end connections
=======
    ], //end connections
>>>>>>> 688d0704 (first)
];
