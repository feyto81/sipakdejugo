<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendudukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penduduks', function (Blueprint $table) {
            $table->increments('pendudukid');
            $table->bigInteger('nokk')->unique();
            // biginteger
            // kasih edit 20
            $table->bigInteger('nik');
            // biginteger
            // kasih edit 20
            $table->string('name');
            $table->string('gender');
            $table->date('tanggal_lahir');
            $table->string('hub_keluarga');
            $table->string('alamat');
            $table->string('rt_rw');
            $table->string('desa');
            $table->string('kecamatan');
            $table->string('tmp_lahir');
            $table->string('agama');
            $table->string('pendidikan');
            $table->string('pekerjaan');
            $table->string('status_perkawinan');
            $table->string('ayah');
            $table->string('ibu');
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
        Schema::dropIfExists('penduduks');
    }
}
