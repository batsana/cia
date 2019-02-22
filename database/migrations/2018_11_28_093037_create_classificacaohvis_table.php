<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassificacaohvisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classificacaohvis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numerofardo')->nullable();
            $table->integer('numerotext')->nullable();
            $table->string('subId')->nullable();
            $table->string('uhml')->nullable();
            $table->string('ml')->nullable();
            $table->string('ui')->nullable();
            $table->string('strength')->nullable();
            $table->string('elongatio')->nullable();
            $table->string('mic')->nullable();
            $table->string('rd')->nullable();
            $table->string('b')->nullable();
            $table->string('cg')->nullable();
            $table->string('trcount')->nullable();
            $table->string('trArea')->nullable();
            $table->string('lfGrade')->nullable();
            $table->string('moise')->nullable();
            $table->string('sfi')->nullable();
            $table->string('mr')->nullable();
            $table->string('sold')->nullable();
            $table->string('invoice')->nullable();
            $table->string('datapulicacao')->nullable();
             $table->integer('entidade_id')->unsigned()->nullable();
            $table->foreign('entidade_id')->references('id')->on('entidades')->onDelete('cascade');
            $table->integer('fabrica_id')->unsigned()->nullable();
            $table->foreign('fabrica_id')->references('id')->on('entidades')->onDelete('cascade');



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
        Schema::dropIfExists('classificacaohvis');
    }
}
