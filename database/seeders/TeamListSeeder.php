<?php

namespace Database\Seeders;

use App\Models\TeamLists;
use Illuminate\Database\Seeder;

class TeamListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TeamLists::create([
            'nama' => 'Joni Firdaus',
            'title' => 'Kepala Sekolah',
            'photo' => 'kepsek.jpeg',
            'deskripsi' => 'Nama Saya Joni Firdaus, Saya Merupakan Kepala Sekolah SMK Multistudi Highshool.
             "Jangan meremehkan diri sendiri. Jika kamu tak bahagia dengan hidupmu, 
             perbaiki apa yang salah dan teruslah melangkah".'
        ]);
        TeamLists::create([
            'nama' => 'Joni Putra',
            'title' => 'Guru',
            'photo' => 'joniputra.jpeg',
            'link_yt' => 'https://youtube.com/jp',
            'link_ig' => 'https://instagram.com/jp',
            'link_twitter' => 'https://twitter.com/jp',
            'deskripsi' => 'Nama saya Joni Putra, Saya Merupakan Guru Basis Data. 
            "Hidup tak semudah membalikkan telapak tangan, tetapi dengan telapak tangan 
            kita dapat mengubah hidup kita jauh lebih baik lagi".'
        ]);
        TeamLists::create([
            'nama' => 'Dedi Aviandi',
            'title' => 'Kajur RPL',
            'deskripsi' => 'Nama saya Dedi Aviandi dan saya adalah seorang kajur dari jurusan RPL.
            "Tommorow is my exam, but i don\'t care. Cause, a single piece of paper can\'t decide
            my future."'
        ]);
    }
}
