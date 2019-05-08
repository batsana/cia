<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificadoclasse extends Model
{
 protected $table = 'certificadoclasses';
  protected $fillable = ['ref','navio','destino','pesobruto','classif_id','esquema_id'];
}

