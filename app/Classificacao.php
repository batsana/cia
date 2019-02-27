<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classificacao extends Model
{
    protected $table ='classificacaos';
    protected $fillable = ['numerofardo','lote','lista','barcod','sacha','sacha1','tipo','pesolik','comprimento','pesobru','grau','fabrica_id','entidade_id'];

}


 