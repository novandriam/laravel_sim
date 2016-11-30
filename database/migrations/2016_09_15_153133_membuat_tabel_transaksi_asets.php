<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MembuatTabelTransaksiAsets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_asets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('aset_id');
            $table->integer('user_id');
            $table->integer('jumlah');
            $table->string('tipe_transaksi');
            $table->string('ke');
            $table->string('dari');
            $table->text('keterangan');
            $table->string('file_surat');
            $table->datetime('tgl_kembali');
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
        Schema::drop('transaksi_asets');
    }
}
