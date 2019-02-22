<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contratos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('consignatario')->nullable();
            $table->string('estado')->nullable();
            $table->string('destino')->nullable();
            $table->string('marcafardo')->nullable();
            $table->string('portoembarq')->nullable();
            $table->string('campanha')->nullable();
            $table->integer('nrcontrato')->nullable();
            $table->string('periudovigencia')->nullable();
            $table->integer('quantfibra')->nullable();
            $table->string('preco')->nullable();

            $table->integer('fabrica_id')->unsigned()->nullable();
            $table->foreign('fabrica_id')->references('id')->on('fabricas')->onDelete('cascade');

           
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
        Schema::dropIfExists('contratos');
    }
}
