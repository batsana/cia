<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFaturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faturas', function (Blueprint $table) {
           
            $table->increments('id');
            $table->string('numerofatura')->nullable()->unique();
            $table->string('transformacao')->nullable();
            $table->string('liquidacao')->nullable();
            $table->string('condices')->nullable();
            $table->string('mercadoria')->nullable();
            $table->string('embalagem')->nullable();
            $table->string('marcas')->nullable();
            $table->string('observacoes')->nullable();
            $table->string('tipo')->nullable();
            $table->string('fibra')->nullable();            
            $table->double('pesoliquido')->nullable();
            $table->double('pesulibra')->nullable();
            $table->double('preco')->nullable();
            $table->double('total')->nullable();

            $table->integer('nacionals_id')->unsigned()->nullable();
            $table->foreign('nacionals_id')->references('id')->on('certificadonacionals')->onDelete('cascade');
           
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
        Schema::dropIfExists('faturas');
    }
}
