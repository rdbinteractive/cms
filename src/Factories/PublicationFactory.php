<?php

namespace Database\Factories;

use RDBI\CMS\Models\Publication;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Publication>
 */
class PublicationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => 'test-publication',
            'slug' => 'test-publication',
            'publication_type_id' => 1,
            'excerpt' => fake()->paragraph(4),
            'layout' => 'page_builder',
            'is_published' => true,
        ];
    }
}
