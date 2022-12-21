<?php

namespace RDBI\CMS\Factories;

use RDBI\CMS\Models\PublicationType;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<PublicationType>
 */
class PublicationTypeFactory extends Factory
{
    protected $model = PublicationType::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->sentence();
        return [
            'name' => $title,
            'slug' => Str::slug($title),
        ];
    }
}
