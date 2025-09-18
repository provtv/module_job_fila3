<?php

declare(strict_types=1);

namespace Modules\Job\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Job\Models\Schedule;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Modules\Job\Models\Schedule>
 */
class ScheduleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<Schedule>
     */
    protected $model = Schedule::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
<<<<<<< HEAD
    public function definition(): void {
=======
    public function definition()
    {
>>>>>>> de0f89b5 (.)
        return [
        ];
    }
}
