<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateValidasiusernamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('validasiusername', function (Blueprint $table) {
            $table->id();
            $table->foreign('id_permintaan')->references('id')->on('usernamedapodiks')->onDelete('cascade');
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
        Schema::dropIfExists('validasiusername');
    }
}
