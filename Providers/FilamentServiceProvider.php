<?php

declare(strict_types=1);

namespace Modules\Job\Providers;

use Modules\Xot\Providers\XotBaseContextServiceProvider;

class FilamentServiceProvider extends XotBaseContextServiceProvider
{
    public static string $name = 'job-filament';
    public static string $module = 'Job';
}
