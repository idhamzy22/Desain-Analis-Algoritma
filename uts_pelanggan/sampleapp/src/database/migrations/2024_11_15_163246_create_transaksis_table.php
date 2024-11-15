<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->foreignId('pelanggan_id')->constrained('pelanggans')->onDelete('cascade'); // Relasi ke tabel pelanggans
            $table->date('transaction_date'); // Tanggal transaksi
            $table->decimal('amount', 10, 2); // Jumlah transaksi
            $table->string('status'); // Status transaksi (e.g., pending, completed)
            $table->text('description')->nullable(); // Deskripsi transaksi (opsional)
            $table->timestamps(); // Timestamps (created_at & updated_at)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};