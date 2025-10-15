<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelangganTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table(table: 'pelanggan')->insert(values: [
        'nama_pelanggan' => 'Mala Ramdhani',
        'email' => 'mala@example.com',
        'no_hp' => '081234567890',
        'alamat' => 'Jl. Melati No. 12, Bandung',
        'created_at' => now(),
        'updated_at' => now(),
    ]);
    }
}
