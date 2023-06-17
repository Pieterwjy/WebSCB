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
        Schema::create('Akun', function (Blueprint $table) {
            $table->id('id_akun');
            $table->string('nama_akun');
            $table->string('sandi_akun');
            $table->string('hak_akses_akun');
            $table->boolval('status_akun');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Akun');
    }
};
