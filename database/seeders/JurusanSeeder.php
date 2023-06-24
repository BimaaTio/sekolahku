<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jurusan::create([
            'nama' => 'Rekayasa Perangkat Lunak',
            'singkatan' => 'rpl',
            'slug' => Str::slug('rekayasa perangkat lunak'),
            'konten' => 'RPL Adalah lorem20kasmdkpasjdkasjmd',
            'logo' => 'logo.png',
        ]);

        Jurusan::create([
            'nama' => 'Teknis Bisnis Sepeda Motor',
            'singkatan' => 'tsm',
            'slug' => Str::slug('Teknis Bisnis Sepeda Motor'),
            'konten' => 'TSM Adalah lorem20kasmdkpasjdkasjmd',
            'logo' => 'logo.png',
        ]);

        Jurusan::create([
            'nama' => 'Teknik Kendaraan Ringan',
            'singkatan' => 'tkr',
            'slug' => Str::slug('Teknik Kendaraan Ringan'),
            'konten' => 'TKR Adalah lorem20kasmdkpasjdkasjmd',
            'logo' => 'logo.png',
        ]);

        Jurusan::create([
            'nama' => 'Teknik Permesinan',
            'singkatan' => 'tp',
            'slug' => Str::slug('Teknik Permesinan'),
            'konten' => 'TP Adalah lorem20kasmdkpasjdkasjmd',
            'logo' => 'logo.png',
        ]);
    }
}
