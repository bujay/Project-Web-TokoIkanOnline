<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JudulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('juduls')->insert([
        	'nama' => 'ikan',
        	'judul' => 'ikan laut',
        	'gambar' => 'IkanLaut.png',
        ]);

        DB::table('juduls')->insert([
        	'nama' => 'ikan',
        	'judul' => 'ikan tawar',
        	'gambar' => 'IkanTawar.png',
        ]);
   
    }
}
