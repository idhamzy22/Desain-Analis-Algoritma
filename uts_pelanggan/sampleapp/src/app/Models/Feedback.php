<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    // Kolom-kolom yang dapat diisi secara massal
    protected $fillable = [
        'pelanggan_id',
        'message',
        'rating',
        'submitted_at',
        'status',
    ];    

    // Relasi ke model Pelanggan
    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class);  // Relationship to Pelanggan
    }
}
