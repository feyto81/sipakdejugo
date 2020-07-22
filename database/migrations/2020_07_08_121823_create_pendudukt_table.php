<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenduduktTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendudukt', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nik')->nullable();
            $table->string('no_kk')->nullable();
            $table->string('nama')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->string('tanggal_lahir')->nullable();
            $table->integer('umur')->nullable();
            $table->string('hubungan_keluarga')->nullable();
            $table->string('dukuh')->nullable();
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            $table->string('alamat')->nullable();
            $table->string('desa')->nullable();
            $table->string('kec')->nullable();
            $table->string('kab')->nullable();
            $table->string('agama')->nullable();
            $table->string('pendidikan')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->string('status_perkawinan')->nullable();
            $table->string('gol_darah')->nullable();
            $table->string('nama_ayah')->nullable();
            $table->string('nik_ayah')->nullable();
            $table->string('nama_ibu')->nullable();
            $table->string('nik_ibu')->nullable();
            $table->string('kewarganegaraan')->nullable();
            $table->string('kelainan_fisik')->nullable();
            $table->string('penyandang_cacat')->nullable();
            $table->string('akte_kelahiran')->nullable();
            $table->string('no_akte_Kelahiran')->nullable();
            $table->string('buku_nikah')->nullable();
            $table->string('no_akta_buku_nikah')->nullable();
            $table->string('tanggal_kawin')->nullable();
            $table->string('akta_cerai')->nullable();
            $table->string('no_akta_cerai')->nullable();
            $table->string('tanggal_penceraian')->nullable();
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
        Schema::dropIfExists('pendudukt');
    }
}
