<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemerintahdesaTable extends Migration
{
    
    public function up()
    {
        Schema::create('pemerintahdesa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('images');
            $table->string('title');
            $table->string('title1');
            $table->string('body');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('pemerintahdesa');
    }
}
