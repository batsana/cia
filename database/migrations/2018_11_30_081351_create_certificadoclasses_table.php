<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCertificadoclassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificadoclasses', function (Blueprint $table) {
            $table->increments('id');
             $table->integer('quantfardo')->nullable();
             $table->integer('quantestenso')->nullable();
             $table->string('marcafardo')->nullable();
             $table->string('navio')->nullable();
             $table->string('destino')->nullable();
            $table->string('pesobruto')->nullable();
            $table->string('pesoliq')->nullable();

             $table->integer('classif_id')->unsigned()->nullable();
            $table->foreign('classif_id')->references('id')->on('classificacaos')->onDelete('cascade');

            $table->integer('esquema_id')->unsigned()->nullable();
            $table->foreign('esquema_id')->references('id')->on('esquemas')->onDelete('cascade');

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
        Schema::dropIfExists('certificadoclasses');
    }
}
