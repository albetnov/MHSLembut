<?php

namespace Database\Seeders;

use App\Models\Products as ModelsProducts;
use Illuminate\Database\Seeder;

class Products extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelsProducts::create([
            'product_name' => 'Laundry',
            'product_desc' => 'Ini aplikasi laundry',
            'product_banner' => 'laundry.jpg',
            'links_buy' => 'https://google.com',
            'status_produk' => 'paling_disukai',
            'status_masa' => null
        ]);
        ModelsProducts::create([
            'product_name' => 'E-Library',
            'product_desc' => 'Ini aplikasi e-library',
            'product_banner' => 'elibrary.jpg',
            'links_buy' => 'https://google.com',
            'status_produk' => 'paling_disukai',
            'status_masa' => null
        ]);
        ModelsProducts::create([
            'product_name' => 'Absensi',
            'product_desc' => 'Ini aplikasi absensi',
            'product_banner' => 'absensi.jpg',
            'links_buy' => 'https://google.com',
            'status_produk' => 'paling_disukai',
            'status_masa' => null
        ]);
        ModelsProducts::create([
            'product_name' => 'Hotel',
            'product_desc' => 'Ini aplikasi hotel',
            'product_banner' => 'hotel.jpg',
            'links_buy' => 'https://google.com',
            'status_produk' => 'paling_laku',
            'status_masa' => 'baru'
        ]);
        ModelsProducts::create([
            'product_name' => 'SisInfoAlumni',
            'product_desc' => 'Ini aplikasi SisInfoAlumni',
            'product_banner' => 'sisinfo.jpg',
            'links_buy' => 'https://google.com',
            'status_produk' => 'paling_laku',
            'status_masa' => 'baru'
        ]);
    }
}
