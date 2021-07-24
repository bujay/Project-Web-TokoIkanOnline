<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('products')->insert([
        	'nama' => 'ikan kakap',
            'judul_id' => 1,
            'gambar' => 'IkanKakap.png'
        ]);

        DB::table('products')->insert([
        	'nama' => 'ikan salmon',
            'judul_id' => 1,
            'gambar' => 'IkanSalmon.png'
        ]);

        DB::table('products')->insert([
        	'nama' => 'ikan sardin',
            'judul_id' => 1,
            'gambar' => 'IkanSardin.png'
        ]);

        DB::table('products')->insert([
        	'nama' => 'ikan tenggiri',
            'judul_id' => 1,
            'gambar' => 'IkanTenggiri.png'
        ]);

        DB::table('products')->insert([
        	'nama' => 'ikan tuna',
            'judul_id' => 1,
            'gambar' => 'IkanTuna.png'
        ]);


        DB::table('products')->insert([
        	'nama' => 'ikan bandeng',
            'judul_id' => 2,
            'gambar' => 'IkanBandeng.png'
        ]);

        DB::table('products')->insert([
        	'nama' => 'ikan bawal',
            'judul_id' => 2,
            'gambar' => 'IkanBawal.png'
        ]);

        DB::table('products')->insert([
        	'nama' => 'ikan belut',
            'judul_id' => 2,
            'gambar' => 'IkanBelut.png'
        ]);

        DB::table('products')->insert([
        	'nama' => 'ikan gabus',
            'judul_id' => 2,
            'gambar' => 'IkanGabus.png'
        ]);

        DB::table('products')->insert([
        	'nama' => 'ikan gurami',
            'judul_id' => 2,
            'gambar' => 'IkanGurami.png'
        ]);

        DB::table('products')->insert([
        	'nama' => 'ikan lele',
            'judul_id' => 2,
            'gambar' => 'IkanLele.png'
        ]);

        DB::table('products')->insert([
        	'nama' => 'ikan mas',
            'judul_id' => 2,
            'gambar' => 'IkanMas.png'
        ]);

        DB::table('products')->insert([
        	'nama' => 'ikan mujair',
            'judul_id' => 2,
            'gambar' => 'IkanMujair.png'
        ]);

        DB::table('products')->insert([
        	'nama' => 'ikan nila',
            'judul_id' => 2,
            'gambar' => 'IkanNila.png'
        ]);

        DB::table('products')->insert([
        	'nama' => 'ikan patin',
            'judul_id' => 2,
            'gambar' => 'IkanPatin.png'
        ]);
    }
}
