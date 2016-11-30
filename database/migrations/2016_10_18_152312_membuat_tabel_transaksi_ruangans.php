<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MembuatTabelTransaksiRuangans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_ruangans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('ruangan_id');
            $table->integer('jumlah');
            $table->string('ke');
            $table->string('tipe_transaksi');
            $table->string('dari');
            $table->datetime('tgl_kembali');
            $table->string('file_surat');
            $table->text('keterangan');
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
        Schema::drop('transaksi_ruangans');
    }
}
