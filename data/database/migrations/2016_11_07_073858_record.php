<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Record extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('record', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tanggal_surat');
            $table->string('no_surat');
            $table->string('nama_pegawai');
            $table->string('nip', 50)->index();
            $table->string('nama_surat')->index();
            $table->string('keterangan');
            $table->string('status');
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
        Schema::drop('record');
    }
}
