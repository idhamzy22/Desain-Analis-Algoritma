<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlamatPelanggan extends Model
{
    use HasFactory;

    protected $fillable = [
        'pelanggan_id',
        'address_line',
        'city',
        'state',
        'postal_code',
    ];

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class); // Ensure Pelanggan model exists
    }
}
