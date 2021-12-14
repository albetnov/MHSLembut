<?php

namespace Database\Seeders;

use App\Models\PublicContact;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PublicContact::factory(50)->create();
    }
}
