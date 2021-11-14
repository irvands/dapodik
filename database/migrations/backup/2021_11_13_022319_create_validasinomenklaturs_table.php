<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateValidasinomenklatursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('validasinomenklatur', function (Blueprint $table) {
            $table->id();
            $table->foreign('id_permintaan')->references('id')->on('nomenklatur')->onDelete('cascade');
            $table->unsignedBigInteger('id_permintaan');
            $table->string('petugas_validasi',255);
            $table->string('status',255);
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
        Schema::dropIfExists('validasinomenklatur');
    }
}