<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Entidade;

class Fabrica extends Model
{
	protected $table = 'fabricas';
	protected $fillable = ['nome','conse','endereco','telefone','numerunico','matrizfilial','user_id','entidade_id'];
    //


 
}
