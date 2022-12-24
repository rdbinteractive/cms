<?php

namespace RDBI\CMS\Seeders;

use RDBI\CMS\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::factory()->create([
            'name' => 'Breakfast',
            'slug' => 'breakfast',
        ]);

        Category::factory()->create([
            'name' => 'Lunch',
            'slug' => 'lunch',
        ]);

        Category::factory()->create([
            'name' => 'Dinner',
            'slug' => 'dinner',
        ]);

        Category::factory()->create([
            'name' => 'Heal Your Body',
            'slug' => 'heal-your-body',
        ]);

        Category::factory()->create([
            'name' => 'Balance Your Metabolism',
            'slug' => 'balance-your-metabolism',
        ]);

        Category::factory()->create([
            'name' => 'Blah Your Blargh',
            'slug' => 'blah-your-blargh',
        ]);
    }
}
