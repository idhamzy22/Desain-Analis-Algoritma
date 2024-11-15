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
        Schema::create('alamat_pelanggans', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->foreignId('pelanggan_id')->constrained('pelanggans')->onDelete('cascade'); // Relasi ke tabel pelanggans
            $table->string('address_line'); // Nama field yang benar
            $table->string('city');
            $table->string('state');
            $table->string('postal_code');
            $table->timestamps(); // Timestamps (created_at & updated_at)
        });
    }    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alamat_pelanggans');
    }
};