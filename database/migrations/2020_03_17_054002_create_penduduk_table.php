<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePendudukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penduduk', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nik');
            $table->string('nama');
            $table->string('tempat');
            $table->date('tl');
            $table->string('jenis_kelamin');
            $table->text('alamat');
            $table->string('rt');
            $table->string('rw');
            $table->string('kel_desa');
            $table->string('status');
            $table->string('pekerjaan');
            $table->string('kewarganegaraan');
            $table->string('nkk');

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
        Schema::dropIfExists('penduduk');
    }
}
