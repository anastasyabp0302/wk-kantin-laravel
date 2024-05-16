<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Jajanan;

class JajananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jajanans')->insert([
        [
            'nama' => 'Tahu Isi',
            'harga' => 2000,
            'gambar' => 'tahu_isi.jpg',
        ],
        [
            'nama' => 'Cireng Isi',
            'harga' => 2500,
            'gambar' => 'cireng_isi.jpg',
        ],
        [
            'nama' => 'Sempol',
            'harga' => 1500,
            'gambar' => 'sempol.jpg',
        ],
    ]);
    }
}
