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
        $this->call(Products::class);
        $this->call(ProductPhoto::class);
        $this->call(TeamListSeeder::class);
        $this->call(ContactSeeder::class);
    }
}
