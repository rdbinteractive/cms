<?php

namespace RDBI\CMS\Seeders;

use RDBI\CMS\Models\PublicationType;
use Illuminate\Database\Seeder;

class PublicationTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PublicationType::factory()->create([
            'name' => 'Page',
            'slug' => 'pages',
        ]);

        PublicationType::factory()->create([
            'name' => 'Article',
            'slug' => 'articles',
        ]);

        PublicationType::factory()->create([
            'name' => 'Recipe',
            'slug' => 'recipes',
        ]);

        PublicationType::factory()->create([
            'name' => 'Video',
            'slug' => 'videos',
        ]);
    }
}
