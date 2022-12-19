<?php

namespace RDBI\CMS\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \RDBI\CMS\Models\CMSUser::factory()->create([
            'name' => 'rob',
            'email' => 'rob@bardall.net',
            'password' => 'adminadmin',
        ]);
    }
}
