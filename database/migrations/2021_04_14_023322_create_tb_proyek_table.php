<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbProyekTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_proyek', function (Blueprint $table) {
            $table->string('nama_proyek');
            $table->integer('id_lokasi');
            $table->integer('kode_material');
            $table->integer('id_pengguna');
            $table->time('tanggal_mulai');
            $table->time('tanggal_selesai');
            $table->string('masa_pengerjaan');
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
        Schema::dropIfExists('tb_proyek');
    }
}
