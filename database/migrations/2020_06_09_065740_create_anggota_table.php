<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnggotaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggota', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->unsignedBigInteger('id_ketua');
            $table->timestamps();            
            $table->foreign('id_ketua')->references('id')->on('ketua');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anggota');
    }
}
