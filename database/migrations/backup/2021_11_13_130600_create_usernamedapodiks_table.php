<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsernamedapodiksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usernamedapodiks', function (Blueprint $table) {
            $table->id();
            $table->foreign('id_pengaju')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('id_pengaju');
            $table->string('nama_sekolah',255);
            $table->string('alamat',255);
            $table->string('surat_permohonan_username',255);
            $table->string('surat_tugas_operator',255);
            $table->string('status',255);
            $table->string('keterangan',255);
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
        Schema::dropIfExists('usernamedapodiks');
    }
}
