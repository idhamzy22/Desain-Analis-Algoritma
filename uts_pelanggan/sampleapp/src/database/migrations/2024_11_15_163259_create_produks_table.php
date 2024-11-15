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
        Schema::create('produks', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('name'); // Nama produk
            $table->decimal('price', 10, 2); // Harga produk
            $table->integer('stock'); // Stok produk
            $table->text('description')->nullable(); // Deskripsi produk (opsional)
            $table->string('category'); // Kategori produk
            $table->timestamps(); // Timestamps (created_at & updated_at)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};