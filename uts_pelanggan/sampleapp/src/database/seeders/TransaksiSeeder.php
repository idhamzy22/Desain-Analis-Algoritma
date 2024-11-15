<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Transaksi;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Transaksi::create([
            'pelanggan_id' => 1, // Pastikan ID pelanggan ini ada
            'transaction_date' => '2024-11-10',
            'amount' => 250000.00,
            'status' => 'completed',
            'description' => 'Pembelian produk A',
        ]);
        
        Transaksi::create([
            'pelanggan_id' => 2, // Pastikan ID pelanggan ini ada
            'transaction_date' => '2024-11-12',
            'amount' => 150000.00,
            'status' => 'pending',
            'description' => 'Pembelian produk B',
        ]);
        
    }
}