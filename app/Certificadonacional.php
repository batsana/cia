<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificadonacional extends Model
{
  protected $table = 'certificadonacionals';
  protected $fillable = ['marcafardo','quantfardo','destino','pesobruto','pesoliq','certif_id','contrato_id','ref'];
}

