<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDusunTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dusun', function (Blueprint $table) {
            $table->id();
            $table->string('dusun');
            $table->string('kepala_dusun');
            $table->string('rw');
            $table->string('rt');
            $table->string('kk');
            $table->string('laki');
            $table->string('perempuan');
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
        Schema::dropIfExists('dusun');
    }
}
