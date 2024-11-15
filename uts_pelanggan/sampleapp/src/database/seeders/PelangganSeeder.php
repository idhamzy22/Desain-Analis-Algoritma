<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pelanggan;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pelanggan::create([
            'name' => 'Idham Kholid Nur Azizi',
            'email' => 'idhamzyy@gmail.com',
            'phone_number' => '082124277747',
            'address' => 'Jl. Green Leaf Residence, Rajeg Blok C7 No. 03',
            'join_date' => '2024-11-01',
        ]);
        
        Pelanggan::create([
            'name' => 'Evi Andini',
            'email' => 'candini27@gmail.com',
            'phone_number' => '081914794393',
            'address' => 'Jl. Raya Peusar, Cikupa Blok C2 No. 03',
            'join_date' => '2024-10-20',
        ]);
        
    }
}