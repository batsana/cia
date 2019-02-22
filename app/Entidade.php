<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Entidade extends Model
{
    protected $table ='entidades';
    protected $fillable = ['endereco','telefone','numerunico','user_id'];

      public function getUser(){
    	return $this->belongsto(User::class,'user_id');
    }
}
