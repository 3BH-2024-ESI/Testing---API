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
        \App\Models\Pizza::factory(10)->create();
        \App\Models\Pizza::factory(1)->create([
            "id" => 5000,
            "deleted_at" => null
        ]);
        \App\Models\Pizza::factory(1)->create([
            "id" => 5001,
            "deleted_at" => null
        ]);
    }
}
