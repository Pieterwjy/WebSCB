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
        Schema::create('Pengumuman', function (Blueprint $table) {
            $table->id('id_pengumuman');
            $table->integer('id_akun');
            $table->foreign('id_akun')->references('id_akun')->on('Akun')->onDelete('cascade');
            $table->timestamps();
            $table->string('deskripsi_pengumuman');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Pengumuman');
    }
};
