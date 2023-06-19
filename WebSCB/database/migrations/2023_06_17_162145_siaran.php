<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Siaran', function (Blueprint $table) {
            $table->id('id_siaran');
            $table->integer('id_akun');
            $table->foreign('id_akun')->references('id_akun')->on('Akun')->onDelete('cascade');
            $table->date_time_set('tanggal_siaran');
            $table->string('embed_siaran');
            $table->string('deskripsi_siaran');
            $table->string('status_siaran');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Siaran');
    }
};
