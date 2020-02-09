<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeluargasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keluarga', function (Blueprint $table) {
            $table->increments('nik');
            $table->integer('user_id')->unsigned()->nullable();
            $table->enum('hubungan',['ayah', 'ibu', 'suami', 'istri', 'anak']);
            $table->string('nama_lengkap');
            $table->boolean('jenis_kelamin')->default(0);
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->date('tanggal_kematian')->nullable();
            $table->string('lokasi_pemakaman')->nullable();
            $table->string('foto')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('keluarga');
    }
}
