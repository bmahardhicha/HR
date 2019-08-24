<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogCutiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_cuti', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_karyawan');
            $table->date('tanggal_mulai_cuti');
            $table->date('tanggal_akhir_cuti');
            $table->date('total_cuti');
            $table->string('alasan_cuti');
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
        Schema::dropIfExists('log_cuti');
    }
}
