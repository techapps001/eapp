<?php

namespace Workdo\Taskly\Database\Factories;

use Workdo\Taskly\Entities\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    protected $model = Project::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->words(3, true),
            'description' => $this->faker->paragraph(),
            'start_date' => now(),
            'end_date' => now()->addDays(5),
        ];
    }
}
