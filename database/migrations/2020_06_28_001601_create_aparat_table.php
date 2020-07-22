<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAparatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aparat', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('foto');
            $table->string('nama');
            $table->string('nip');
            $table->string('nik');
            $table->string('tempat');
            $table->string('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->string('pangkat');
            $table->string('jabatan');
            $table->string('pendidikan_terakhir');
            $table->string('nomor_sk_pengangkatan');
            $table->string('tanggal_sk_pengangkatan');
            $table->string('nomor_sk_pemberhentian');
            $table->string('tanggal_sk_pemberhentian');
            $table->string('masa_periode');
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
        Schema::dropIfExists('aparat');
    }
}
