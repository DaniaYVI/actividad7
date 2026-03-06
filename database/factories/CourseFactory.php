<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    public function definition(): array
    {
        return [
            'course_key' => $this->faker->unique()->bothify('COURSE-###'),
            'title' => $this->faker->sentence(3),
            'cover' => $this->faker->imageUrl(640, 480),
            'content' => $this->faker->paragraph(3),
            'robotics_kit_id' => rand(1,3)
        ];
    }
}