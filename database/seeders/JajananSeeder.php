<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JajananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jajanans')->insert([
            [
                'nama' => 'sempol',
                'harga' => '1500',
                'image' => 'images/sempol.jpg',
            ],
            [
                'name' => 'Cireng Isi',
                'harga' => 2500,
                'image' => 'images/cireng-isi.jpg',
            ],
            [
                'name' => 'Tahu Isi',
                'harga' => 200,
                'image' => 'images/tahu-isi.jpg',
            ],
            [
                'name' => 'Pisang Aroma',
                'harga' => 2000,
                'image' => 'images/pisang-aroma.jpg',
            ],
            [
                'name' => 'Onigiri',
                'harga' => 3000,
                'image' => 'images/onigiri.webp',
            ],
            [
                'name' => 'Risoles',
                'harga' => 3000,
                'image' => 'images/risoles.jpg',
            ],
            [
                'name' => 'Kue Srikaya',
                'harga' => 2000,
                'image' => 'images/srikaya-kue.jpg',
            ],
            [
                'name' => 'Bakpao Pandan',
                'harga' => 2000,
                'image' => 'images/Bakpao-pandan.jpg',
            ],
            [
                'name' => 'Brownies',
                'harga' => 3000,
                'image' => 'images/brownies.jpg',
            ],
            [
                'name' => 'Dimsum',
                'harga' => 2500,
                'image' => 'images/dimsum.jpg',
            ],
            [
                'name' => 'Bala-Bala',
                'harga' => 1000,
                'image' => 'images/bala-bala.jpg',
            ],
            [
                'name' => 'Karoket Bihun',
                'harga' => 1000,
                'image' => 'images/karoket-bihun.jpg',
            ],
            [
                'name' => 'Putu Ayu',
                'harga' => 1000,
                'image' => 'images/putu-ayu.jpg',
            ],
            [
                'name' => 'Pastel',
                'harga' => 2500,
                'image' => 'images/pastel.jpg',
            ],
        
        ]);
    }
}
