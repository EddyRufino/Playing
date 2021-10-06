<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\Place;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Tag::factory(20)->create();
        Place::factory(20)->create();
    }
}
