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
        //$this->call(catagoryseeder::class);
        //$this->call(postseeder::class);
        $this->call(divisionseeder::class);
        $this->call(districtseeder::class);
        $this->call(thanaseeder::class);
    }
}
