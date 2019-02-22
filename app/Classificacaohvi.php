<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classificacaohvi extends Model
{
    protected $table ='classificacaohvis';
    protected $fillable = ['numerofardo','numerotext','subId','uhml','ml','ui','strength','elongatio',
    'mic','rd','b','cg','trcount','trArea','lfGrade','moise','sfi' ,'mr','sold','invoice','moise','estado','datapulicacao','entidade_id','obser','fabrica_id'];

}

