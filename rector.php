<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
use Rector\CodeQuality\Rector\Class_\InlineConstructorDefaultToPropertyRector;
=======
>>>>>>> 229d0d51 (Squashed 'laravel/Modules/Xot/' content from commit 1e7f566e)
use Rector\Config\RectorConfig;
use Rector\PHPUnit\Set\PHPUnitLevelSetList;
use Rector\Set\ValueObject\LevelSetList;
use Rector\Set\ValueObject\SetList;
<<<<<<< HEAD
use RectorLaravel\Rector\MethodCall\RedirectRouteToToRouteHelperRector;
=======
>>>>>>> 229d0d51 (Squashed 'laravel/Modules/Xot/' content from commit 1e7f566e)
use RectorLaravel\Set\LaravelSetList;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->paths(
        [
<<<<<<< HEAD
            __DIR__,
=======
            __DIR__.'/Modules',
            __DIR__.'/app',
            __DIR__.'/bootstrap',
            __DIR__.'/config',
            __DIR__.'/lang',
            __DIR__.'/resources',
            __DIR__.'/routes',
            __DIR__.'/tests',
>>>>>>> 229d0d51 (Squashed 'laravel/Modules/Xot/' content from commit 1e7f566e)
        ]
    );

    $rectorConfig->skip(
        [
<<<<<<< HEAD
            './vendor/',
            '*/docs',
            '*/vendor',
=======
            __DIR__.'/Modules/*/docs',
            __DIR__.'/Modules/*/vendor',
            '*/docs',
            '*/vendor',
            './vendor/',
>>>>>>> 229d0d51 (Squashed 'laravel/Modules/Xot/' content from commit 1e7f566e)
        ]
    );

    // register a single rule
    // $rectorConfig->rule(InlineConstructorDefaultToPropertyRector::class);
<<<<<<< HEAD
    $rectorConfig->rule(RedirectRouteToToRouteHelperRector::class);
=======
    // $rectorConfig->rule(RedirectRouteToToRouteHelperRector::class);
>>>>>>> 229d0d51 (Squashed 'laravel/Modules/Xot/' content from commit 1e7f566e)

    // define sets of rules
    $rectorConfig->sets(
        [
            PHPUnitLevelSetList::UP_TO_PHPUNIT_100,
            // SetList::DEAD_CODE,
            // SetList::CODE_QUALITY,
            LevelSetList::UP_TO_PHP_81,
            LaravelSetList::LARAVEL_100,

            // SetList::NAMING, //problemi con injuction
            SetList::TYPE_DECLARATION,
            // SetList::CODING_STYLE,
            // SetList::PRIVATIZATION,//problemi con final
            // SetList::EARLY_RETURN,
            // SetList::INSTANCEOF,
        ]
    );

    $rectorConfig->importNames();
};
<<<<<<< HEAD
=======
use Rector\Config\RectorConfig;
use Rector\TypeDeclaration\Rector\ClassMethod\AddVoidReturnTypeWhereNoReturnRector;

return RectorConfig::configure()
    ->withPaths([
        __DIR__.'/',
    ])
    ->withSkip([
        __DIR__.'/vendor',
    ])
    // uncomment to reach your current PHP version
    ->withPhpSets()
    ->withRules([
        // AddVoidReturnTypeWhereNoReturnRector::class,
    ]);
>>>>>>> 92bbd925 (Squashed 'bashscripts/' content from commit 267da72b)
=======
>>>>>>> 229d0d51 (Squashed 'laravel/Modules/Xot/' content from commit 1e7f566e)
