<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEsquemasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('esquemas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nrlista')->nullable();
            $table->string('tipo')->nullable();
            $table->integer('quantfardo')->nullable();
            $table->integer('lote')->nullable();
          
          
            $table->integer('comprimentofibra')->nullable();
            $table->text('nrocorespond')->nullable();
            $table->integer('pesobruto')->nullable();
            $table->integer('pesoliq')->nullable();
            $table->integer('nrcertific')->nullable();


            $table->integer('fabrica_id')->unsigned()->nullable();
            $table->foreign('fabrica_id')->references('id')->on('fabricas')->onDelete('cascade');

            $table->integer('classificacao_id')->unsigned()->nullable();
            $table->foreign('classificacao_id')->references('id')->on('classificacaos')->onDelete('cascade');

            $table->integer('contrato_id')->unsigned()->nullable();
            $table->foreign('contrato_id')->references('id')->on('contratos')->onDelete('cascade');
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
        Schema::dropIfExists('esquemas');
    }
}
