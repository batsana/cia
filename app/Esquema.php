<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Esquema extends Model
{
  protected $table = 'esquemas';
  protected $fillable = ['nrlista','tipo','quantfardo','libraspeso','valortotal','iampercent','comprimentofibra','nrocorespond','pesobruto','pesoliq','nrcertific','contrato_id','lote','entidade_id','classificacao_id'];
}
