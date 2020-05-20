<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKartusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kartus', function (Blueprint $table) {
            $table->id();
            $table->integer('no_ktp')->unique();
            $table->string('nama');
            $table->string('alamat');
            $table->string('nama_ortu');
            $table->integer('nominal');
            $table->string('program');
            $table->text('foto');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kartus');
    }
}
