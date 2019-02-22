<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Getiqueta extends Model
{
protected $table = 'getiquetas';
protected $fillable =['tipoet','estado','pdfs','motivo','quantidade','inetervalo','entidade_id','fabrica_id'];
  
}
