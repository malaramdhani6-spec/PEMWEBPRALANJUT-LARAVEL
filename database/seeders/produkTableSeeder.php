<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class produkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table(table: 'produk')->insert(values: [
            'nama_produk' => 'Indomi Kuah',
            'kategori' => 'Makanan',
            'harga_satuan' => 3500.00,
            'stok' => 100,
            'satuan' => 'pcs',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
    
}
