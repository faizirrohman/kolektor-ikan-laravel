<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembelianIkansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembelian_ikans', function (Blueprint $table) {
            $table->id();
            $table->string('foto_ikan');
            $table->string('id_ikan');
            $table->string('id_penjual');
            $table->string('harga');
            $table->string('tanggal_pembelian');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembelian_ikans');
    }
}
