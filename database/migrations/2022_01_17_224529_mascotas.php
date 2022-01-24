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
            $table->string('enfermedades')->nullable();
            $table->string('medicamentos')->nullable();
            $table->date('fec_nac');
            $table->string('fotourl')->nullable();
            $table->string('ubiclatitud')->nullable();
            $table->string('ubiclongitud')->nullable();
            $table->string('ubicfecha')->nullable();

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
