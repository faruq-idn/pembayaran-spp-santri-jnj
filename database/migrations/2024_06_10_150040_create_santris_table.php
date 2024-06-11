<?php

// database/migrations/xxxx_xx_xx_create_santris_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSantrisTable extends Migration
{
    public function up()
    {
        Schema::create('santris', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kelas_id')->constrained('kelas')->onDelete('cascade');
            $table->string('santri_wali_nama');
            $table->string('wali_hp');
            $table->string('santri_alamat');
            $table->date('santri_tgl_masuk');
            $table->string('santri_jenis_kelamin');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('santris');
    }
}
