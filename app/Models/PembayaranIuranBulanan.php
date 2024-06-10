<?php

// app/Models/PembayaranIuranBulanan.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PembayaranIuranBulanan extends Model {
    use HasFactory;

    protected $fillable = ['santri_id', 'pembayaran_bulan', 'pembayaran_tgl', 'pembayaran_status'];

    public function santri() {
        return $this->belongsTo(Santri::class);
    }
}
