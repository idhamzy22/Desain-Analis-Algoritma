<?php

// Seeder Adjustments

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Feedback;

class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Feedback::create([
            'pelanggan_id' => 1, // Pastikan ID pelanggan ini ada di tabel `pelanggans`
            'message' => 'Layanan sangat memuaskan',
            'rating' => 5,
            'submitted_at' => '2024-11-12', // Disesuaikan dengan kolom `submitted_at`
            'status' => 'resolved',
        ]);

        Feedback::create([
            'pelanggan_id' => 2, // Pastikan ID pelanggan ini ada di tabel `pelanggans`
            'message' => 'Produk sangat bagus, namun pengiriman sedikit lambat',
            'rating' => 4,
            'submitted_at' => '2024-11-13', // Disesuaikan dengan kolom `submitted_at`
            'status' => 'pending',
        ]);
    }
}
