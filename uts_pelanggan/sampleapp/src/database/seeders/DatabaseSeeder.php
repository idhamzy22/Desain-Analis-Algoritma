<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\Feedback;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Menambahkan pengguna Admin secara manual
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'), // Jangan lupa bcrypt passwordnya
        ]);

        // Memberikan role 'super_admin' kepada user yang baru dibuat
        $user->assignRole('super_admin'); 

        // Memanggil seeders lainnya
        $this->call([
            PelangganSeeder::class,
            AlamatPelangganSeeder::class,
            FeedbackSeeder::class,
            ProdukSeeder::class,
            TransaksiSeeder::class,
        ]);
    }
}