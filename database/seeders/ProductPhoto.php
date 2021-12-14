<?php

namespace Database\Seeders;

use App\Models\ProductPhotos;
use Illuminate\Database\Seeder;

class ProductPhoto extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductPhotos::create([
            'photo_id' => '1',
            'photo' => 'tes.jpg'
        ]);
        ProductPhotos::create([
            'photo_id' => '1',
            'photo' => 'tes2.jpg'
        ]);
    }
}
