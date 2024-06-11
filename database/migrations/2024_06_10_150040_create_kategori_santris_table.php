<?php
// database/migrations/xxxx_xx_xx_create_kategori_santris_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKategoriSantrisTable extends Migration
{
    public function up()
    {
        Schema::create('kategori_santris', function (Blueprint $table) {
            $table->id('id');
            $table->string('kategori_nama');
            $table->decimal('kategori_nominal_pembayaran', 10, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kategori_santris');
    }
}
