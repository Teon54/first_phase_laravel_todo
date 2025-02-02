<?php

namespace Database\Factories;

use App\Enums\TaskStatus;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->word,
            'description' => $this->faker->paragraph,
            'deadline' => $this->faker->dateTime,
            'completed_on' => $this->faker->dateTime,
            'status' => $this->faker->randomElement([TaskStatus::Incomplete,TaskStatus::Complete]),
            'user_id' => User::factory()
        ];
    }
}
