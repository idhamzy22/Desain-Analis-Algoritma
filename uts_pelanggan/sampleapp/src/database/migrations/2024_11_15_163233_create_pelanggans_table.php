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
        Schema::create('pelanggans', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('name'); // Nama Pelanggan
            $table->string('email')->unique(); // Email Pelanggan
            $table->string('phone_number'); // Nomor Telepon Pelanggan
            $table->text('address'); // Alamat Pelanggan
            $table->date('join_date'); // Tanggal Bergabung
            $table->timestamps(); // Timestamps (created_at & updated_at)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelanggans');
    }
};