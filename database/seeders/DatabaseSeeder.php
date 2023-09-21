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
        // \App\Models\User::factory(10)->create();
        \App\Models\Camioneros::factory(100)->create();
        \App\Models\Camioneros::factory(1)->create(
            [ "id" => 25000]
        );
        \App\Models\Camioneros::factory(2)->create(
            [ "id" => 30000]
        );

        \App\Models\Camioneros::factory(3)->create(
            [ "id" => 35000]
        );

    }
}
