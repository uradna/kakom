<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratKeluarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_keluars', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->integer('no_urut');
            $table->date('tanggal');
            $table->date('keluar');
            $table->string('no_surat');
            $table->string('dari');
            $table->string('penerima');
            $table->string('perihal');
            $table->text('file_surat')->nullable();
            $table->smallInteger('tahun');
            $table->tinyInteger('bulan');
            $table->tinyInteger('aktif');
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
        Schema::dropIfExists('surat_keluars');
    }
}
