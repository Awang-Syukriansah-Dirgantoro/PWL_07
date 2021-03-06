<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->string('Nim')->primary();
            $table->string('Nama')->nullable();;
            $table->string('Kelas')->nullable();;
            $table->string('Jurusan')->nullable();;
            $table->string('No_Handphone')->nullable();;
            $table->string('Email')->nullable();;
            $table->string('Tanggal_Lahir')->nullable();;
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
        Schema::dropIfExists('mahasiswa');
    }
}
