<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
  protected $table ='contratos';
    protected $fillable = ['nrcontrato','consignatario','estado','destino','marcafardo','portoembarq','campanha','quantfibra','preco','fabrica_id','user_id','fimPeriudo','comPeriudo','tipoextra','tipoum_id','tipdois_id',
'tipotres_id','tipquatro_id','user_id','entidade_id'];

}

