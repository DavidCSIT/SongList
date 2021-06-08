<?php

namespace Database\Seeders;

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
      \App\Models\User::factory(1)->create(['email' => 'a@a.com','password' => '' ]);
      \App\Models\User::factory(9)->create();
      \App\Models\Song::factory(20)->create();
    }
}
