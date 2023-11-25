<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id('id_transaksi');
            $table->unsignedInteger('id_warga');
            $table->unsignedInteger('id_admin')->nullable();
            $table->unsignedInteger('id_petugas')->nullable();
            $table->decimal('harga_total', 10, 2);
            $table->timestamps();

            $table->foreign('id_warga')->references('id')->on('warga')->onDelete('cascade');
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
        Schema::dropIfExists('transaksi');
    }
}
