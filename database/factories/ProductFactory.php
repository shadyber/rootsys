<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'title'=>$this->faker->sentence,
            'detail'=>$this->faker->paragraph,
            'price'=>$this->faker->numberBetween(1,2000),
            'photo'=>$this->faker->imageUrl(720,680),
            'thumb'=>$this->faker->numberBetween(340,480),
            'product_category_id'=>$this->faker->numberBetween(1,10),
        ];
    }
}
