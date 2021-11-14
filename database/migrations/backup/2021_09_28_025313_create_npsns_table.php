<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNpsnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('npsn', function (Blueprint $table) {
            $table->id();
            $table->foreign('id_pengaju')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('id_pengaju');
            $table->string('npsn',8);
            $table->string('surat_permohonan',255);
            $table->string('surat_ijin_pendirian',255);
            $table->string('sk_luas_tanah_milik',255);
            $table->string('sk_luas_bukan_milik',255);
            $table->string('foto_papan',255);
            $table->string('foto_sekolah',255);
            $table->string('alamat',255);
            $table->string('koordinat',255);
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
        Schema::dropIfExists('npsn');
    }
}
