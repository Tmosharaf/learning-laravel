<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use CreateNewModelsTable;
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
       User::factory()
                    ->count(25)
                    ->create();
    }
}
