<?php

namespace RDBI\CMS\Seeders;

use RDBI\CMS\Models\Publication;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PublicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Pages
         */
        for ($i = 1; $i <= 20; $i++) :
            $title = fake()->sentence(6);
            Publication::factory()->create([
                'title' => $title,
                'slug' => Str::slug($title),
                'publication_type_id' => 1
            ]);
        endfor;

        /**
         * Articles
         */
        for ($i = 1; $i <= 20; $i++) :
            $title = fake()->sentence(6);
            Publication::factory()->create([
                'title' => $title,
                'slug' => Str::slug($title),
                'publication_type_id' => 2
            ]);
        endfor;

        /**
         * Recipes
         */
        for ($i = 1; $i <= 20; $i++) :
            $title = fake()->sentence(6);
            Publication::factory()->create([
                'title' => $title,
                'slug' => Str::slug($title),
                'publication_type_id' => 3
            ]);
        endfor;

        /**
         * Videos
         */
        for ($i = 1; $i <= 20; $i++) :
            $title = fake()->sentence(6);
            Publication::factory()->create([
                'title' => $title,
                'slug' => Str::slug($title),
                'publication_type_id' => 4
            ]);
        endfor;
    }
}
