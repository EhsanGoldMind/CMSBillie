<?php

namespace Database\Factories;

use App\Models\Model;
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
            'title'=>$this->faker->name,
            'description'=>$this->faker->sentence,
            'content'=>$this->faker->text,
            'image'=>'https://www.hdcarwallpapers.com/walls/2021_mclaren_765lt_5k_5-HD.jpg',
            'category_id'=>$this->faker->numberBetween(1,4),
            'user_id'=>1,
            'published_at'=>$this->faker->dateTime,
        ];
    }
}
