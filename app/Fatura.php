<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fatura extends Model
{
   protected $table = 'faturas';
   protected $fillable = ['observacoes','marcas','mercadoria','condices','liquidacao','transformacao','numerofatura','tipo','fibra','pesulibra','pesoliquido','embalagem','total','nacionals_id','estado'];
}
