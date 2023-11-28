<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTanggapanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tanggapan', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_keluhan')->unsigned();
            $table->bigInteger('id_admin')->unsigned()->nullable();
            $table->bigInteger('id_petugas')->unsigned()->nullable();
            $table->text('isi_tanggapan');
            $table->string('status');
            $table->timestamps();

            $table->foreign('id_keluhan')->references('id')->on('keluhan')->onDelete('cascade');
            $table->foreign('id_admin')->references('id')->on('admin')->onDelete('cascade');
            $table->foreign('id_petugas')->references('id')->on('petugas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tanggapan');
    }
}
