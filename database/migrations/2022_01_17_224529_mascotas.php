<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Mascotas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mascotas',function(Blueprint $table){
            $table->id();

            $table->integer('User_id');
            $table->string('key');
            $table->string('name');
            $table->string('calleynum');
            $table->string('enfermedades');
            $table->string('medicamentos');
            $table->date('fec_nac');

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
        Schema::dropIfExists('mascotas');
    }
}
