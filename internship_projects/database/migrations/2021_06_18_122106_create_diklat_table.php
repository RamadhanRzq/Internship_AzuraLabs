<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiklatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diklat', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Nama_Diklat');
            $table->string('Jenis');
            $table->string('Penyelenggara');
            $table->string('Jumlah_Peserta');
            $table->date('Tanggal_Mulai');
            $table->date('Tanggal_Berakhir');
            $table->string('Durasi');
            $table->string('Tempat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diklat');
    }
}
