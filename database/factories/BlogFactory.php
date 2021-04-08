<?php

namespace Database\Factories;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Blog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'title'=>$this->faker->sentence,
            'detail'=>$this->faker->paragraph(6,true),
            'photo'=>'/img/blog.jpg',
            'tags'=>$this->faker->words(5,true),
            'category_id'=>Category::find(rand(1,10))
        ];
    }
}
