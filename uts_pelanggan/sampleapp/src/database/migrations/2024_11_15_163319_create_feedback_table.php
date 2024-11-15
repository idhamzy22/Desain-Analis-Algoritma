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
        Schema::create('feedback', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->foreignId('pelanggan_id')->constrained('pelanggans')->onDelete('cascade'); // Relasi ke tabel pelanggans
            $table->text('message'); // Pesan feedback dari pelanggan
            $table->integer('rating')->default(0); // Rating dari pelanggan (1-5)
            $table->date('submitted_at')->nullable(); // Tanggal feedback diterima/submitted
            $table->string('status')->default('pending'); // Status feedback (pending, resolved, etc.)
            $table->timestamps(); // Timestamps (created_at & updated_at)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feedback');
    }
};
