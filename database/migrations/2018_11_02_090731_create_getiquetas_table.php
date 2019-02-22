<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGetiquetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('getiquetas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipoet');
            $table->string('quantidade');
            $table->string('inetervalo');

             $table->integer('fabrica_id')->unsigned();
            $table->foreign('fabrica_id')->references('id')->on('fabricas')->onDelete('cascade');

            $table->integer('entidade_id')->unsigned();
            $table->foreign('entidade_id')->references('id')->on('entidades')->onDelete('cascade');
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
        Schema::dropIfExists('getiquetas');
    }
}
