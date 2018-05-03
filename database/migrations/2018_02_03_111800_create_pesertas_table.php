<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePesertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesertas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('ktp');
            $table->string('tgl');
            $table->string('kelamin_id');
            $table->string('darah');
            $table->string('komunitas');
            $table->string('tiket_id');
            $table->string('kategori_id');
            $table->string('kaos');
            $table->string('telepon');
            $table->string('telepon1');
            $table->text('alamat');
            $table->text('umur');
            $table->text('kota');
            $table->text('pos');
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
        Schema::dropIfExists('pesertas');
    }
}
