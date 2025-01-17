<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User; // Import the User model
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'body' => $this->faker->paragraph(),
            'user_id' => User::factory(), // Reference the User factory
        ];
    }
}
