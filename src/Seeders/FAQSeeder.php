<?php

namespace RDBI\CMS\Seeders;

use Illuminate\Database\Seeder;
use RDBI\CMS\Models\FAQ;

class FAQSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FAQ::factory(20)->create();
    }
}
