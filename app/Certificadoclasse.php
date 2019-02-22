<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificadoclasse extends Model
{
 protected $table = 'certificadoclasses';
  protected $fillable = ['quantestenso','marcafardo','quantfardo','navio','destino','pesobruto','pesoliq','classif_id','esquema_id'];
}

