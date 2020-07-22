<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatadesaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datadesa', function (Blueprint $table) {
            $table->increments('data_id');
            $table->string('logo');
            $table->string('phone');
            $table->string('email');
            $table->string('sms');
            $table->string('wa');
            $table->string('facebook');
            $table->string('ig');
            $table->string('alamat');
            $table->string('foto_kades');
            $table->string('wilayah_desa');
            $table->string('lokasi_balaidesa');
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
        Schema::dropIfExists('datadesa');
    }
}
