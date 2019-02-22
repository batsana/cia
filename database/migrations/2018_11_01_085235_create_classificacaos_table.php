<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassificacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classificacaos', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('numerofardo')->nullable();
            $table->string('sacha')->nullable();
            $table->string('pesolik')->nullable();
            $table->string('pesobru')->nullable();
            $table->string('grau')->nullable();
            $table->string('tipo')->nullable();//
            $table->string('comprimento')->nullable();//
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
        Schema::dropIfExists('classificacaos');
    }
}
