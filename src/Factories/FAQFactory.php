<?php

namespace RDBI\CMS\Factories;

use RDBI\CMS\Models\FAQ;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<FAQ>
 */
class FAQFactory extends Factory
{
    protected $model = FAQ::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'question' => fake()->sentence(),
            'answer' => fake()->paragraph(),
        ];
    }
}
