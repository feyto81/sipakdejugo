<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengaturanaplikasiTable extends Migration
{
    public function up()
    {
        Schema::create('pengaturanaplikasi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('logo');
            $table->string('foto_kepala_desa');
            $table->string('nama_aplikasi');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('pengaturanaplikasi');
    }
}
