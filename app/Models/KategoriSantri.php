<?php

// app/Models/KategoriSantri.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriSantri extends Model {
    use HasFactory;

    protected $fillable = ['kategori_nama', 'kategori_nominal_pembayaran'];

    public function santris() {
        return $this->hasMany(Santri::class);
    }
}
