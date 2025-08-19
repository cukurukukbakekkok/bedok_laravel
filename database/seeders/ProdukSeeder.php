<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tb_produk')->insert([
        'nama_produk' => 'Mie Ayam',
        'harga' => 10000,
        'deskripsi_produk' => 'WENAKKK',
        'kategori_id' => '1',
        ]);
    }
}
