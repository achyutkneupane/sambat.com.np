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
        return [
            'user_id' => 2,
            'category_id' => 2,
            'title' => $this->faker->sentence($nbWords = 4, $variableNbWords = true),
            'slug' => $this->faker->word,
            'post_content' => $this->faker->sentence($nbWords = 25, $variableNbWords = true),
            'featured_image' => $this->faker->imageUrl($width = 640, $height = 480),
            'views' => 0,
        ];
    }
}
