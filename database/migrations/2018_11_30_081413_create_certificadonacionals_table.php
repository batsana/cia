<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCertificadonacionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificadonacionals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('marcafardo')->nullable();
            $table->integer('quantfardo')->nullable();
            $table->string('destino')->nullable();
            $table->string('pesobruto')->nullable();
            $table->string('pesoliq')->nullable();

            $table->integer('certif_id')->unsigned()->nullable();
            $table->foreign('certif_id')->references('id')->on('certificadoclasses')->onDelete('cascade');

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
        Schema::dropIfExists('certificadonacionals');
    }
}
