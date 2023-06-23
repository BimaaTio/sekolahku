<?php

namespace Database\Seeders;

use App\Models\Berita;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Berita::create([
            'judul' => 'Berita 1',
            'slug' =>  Str::slug('berita 1'),
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'konten' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae soluta minima debitis error incidunt aut. Soluta veniam quam numquam hic.',
            'user_id' => 1,
            'kategori_id' => 1,
            'status' => 'pending',
            'foto' => 's1.jpg'
        ]);

        Berita::create([
            'judul' => 'Berita 2',
            'slug' =>  Str::slug('berita 2'),
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'konten' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae soluta minima debitis error incidunt aut. Soluta veniam quam numquam hic.',
            'user_id' => 1,
            'kategori_id' => 1,
            'status' => 'pending',
            'foto' => 's2.jpg'
        ]);
    }
}
