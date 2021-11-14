<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNomenklatursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nomenklatur', function (Blueprint $table) {
            $table->id();
            $table->foreign('id_pengaju')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('id_pengaju');
            $table->string('nama_sekolah',255);
            $table->string('alamat',255);
            $table->string('nomenklatur_baru',255);
            $table->string('surat_perubahan_nama_sekolah',255);
            $table->string('surat_ijin_operasional',255);
            $table->string('sk_kemenkumham',255);
            $table->string('surat_pengantar_cabang_dinas',255);
            $table->string('surat_permohonan_sekolah',255);
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
        Schema::dropIfExists('nomenklatur');
    }
}
