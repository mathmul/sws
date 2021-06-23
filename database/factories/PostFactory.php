<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        /**
         * $ php arisan tinker
         * >>> App\Models\Post::factory()->times(200)->create(['user_id' => 9]);
         */
        return [
            'body' => $this->faker->sentence(20),
        ];
    }
}
