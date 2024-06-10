<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Santri extends Model {
    use HasFactory;

    protected $fillable = ['kelas_id', 'santri_wali_nama', 'wali_hp', 'santri_alamat', 'santri_tgl_masuk'];

    public function kategori() {
        return $this->belongsTo(KategoriSantri::class);
    }

    public function pembayaran() {
        return $this->hasMany(PembayaranIuranBulanan::class);
    }
}