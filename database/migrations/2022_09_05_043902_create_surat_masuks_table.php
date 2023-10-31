<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratMasuksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_masuks', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->integer('no_urut');
            $table->date('tanggal');
            $table->date('masuk');
            $table->string('no_surat');
            $table->string('pengirim');
            $table->text('perihal');
            $table->tinyInteger('status_disposisi')->nullable();
            $table->text('isi_disposisi')->nullable();
            $table->text('file_surat')->nullable();
            $table->text('file_disposisi')->nullable();
            $table->smallInteger('tahun');
            $table->tinyInteger('bulan');
            $table->tinyInteger('aktif');
            $table->string('penerima_disposisi')->nullable();
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
        Schema::dropIfExists('surat_masuks');
    }
}
