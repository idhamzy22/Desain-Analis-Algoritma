<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produk;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produk::create([
            'name' => 'Produk A',
            'price' => 50000.00,
            'category' => 'Elektronik',
            'stock' => 100,
            'description' => 'Produk elektronik terbaru',
        ]);
        
        Produk::create([
            'name' => 'Produk B',
            'price' => 75000.00,
            'category' => 'Elektronik',
            'stock' => 50,
            'description' => 'Produk elektronik dengan fitur canggih',
        ]);
        
    }
}
