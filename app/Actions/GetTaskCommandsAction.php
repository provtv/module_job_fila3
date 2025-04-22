<?php

declare(strict_types=1);

namespace Modules\Job\Actions;

<<<<<<< HEAD
use Webmozart\Assert\Assert;
=======
<<<<<<< HEAD
use Webmozart\Assert\Assert;
=======
>>>>>>> 0458200 (.)
>>>>>>> a4b668e (.)
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Artisan;
use Spatie\QueueableAction\QueueableAction;
use Symfony\Component\Console\Command\Command;

class GetTaskCommandsAction
{
    use QueueableAction;

    public function execute(): Collection
    {
        $all_commands = collect(Artisan::all());

        /*
        $command_filter = config('totem.artisan.command_filter');
        $whitelist = config('totem.artisan.whitelist', true);

        if (! empty($command_filter)) {
            // $all_commands = $all_commands->filter(function (Command $command) use ($command_filter, $whitelist) {
            $all_commands = $all_commands->filter(function ($command) use ($command_filter, $whitelist) {
                foreach ($command_filter as $filter) {
                    if (fnmatch($filter, $command->getName())) {
                        return $whitelist;
                    }
                }

                return ! $whitelist;
            });
        }
        */
        return $all_commands->sortBy(
            static function (Command $command): string {
<<<<<<< HEAD
                $name = $command->getName();
                Assert::string($name);
=======
<<<<<<< HEAD
                $name = $command->getName();
                Assert::string($name);
=======
                $name = (string) $command->getName();
>>>>>>> 0458200 (.)
>>>>>>> a4b668e (.)
                if (mb_strpos($name, ':') === false) {
                    return ':'.$name;
                }

                return $name;
            }
        );
    }
}
