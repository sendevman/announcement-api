<?php

namespace Database\Factories;

use App\Models\Announcement;
use Illuminate\Database\Eloquent\Factories\Factory;

class AnnouncementFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Announcement::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'author' => $this->faker->name, // Generate a random author name
            'body' => $this->faker->paragraph, // Generate a random paragraph as body
            'created_at' => now(), // Set the current timestamp as created_at
            'updated_at' => now(), // Set the current timestamp as updated_at
        ];
    }
}
