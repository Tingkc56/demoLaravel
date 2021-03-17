<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\user;
use \App\Models\article;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(50)->create();
    }
}
