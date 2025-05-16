<?php

namespace Modules\Product\Databases\factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Product\Models\Product;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence,
            'price' => random_int(100, 10000),
            'stock' => random_int(1, 100)
        ];
    }
}
