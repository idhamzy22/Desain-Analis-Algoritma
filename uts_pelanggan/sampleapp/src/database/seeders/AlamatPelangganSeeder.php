<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AlamatPelanggan;

class AlamatPelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AlamatPelanggan::create([
            'pelanggan_id' => 1, // Make sure this pelanggan_id exists
            'address_line' => 'Jl. Thamrin Menteng Blok A', // Corrected field name
            'city' => 'Jakarta',
            'state' => 'DKI Jakarta',
            'postal_code' => '10110',
        ]);
        
        AlamatPelanggan::create([
            'pelanggan_id' => 2, // Make sure this pelanggan_id exists
            'address_line' => 'Jl. Sunshine Blok B', // Corrected field name
            'city' => 'Bandung',
            'state' => 'Jawa Barat',
            'postal_code' => '40275',
        ]);
    }
}
