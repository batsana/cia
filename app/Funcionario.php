<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $table = 'funcionarios';
   protected $fillable = ['nome','desiganacao','entidade_id','user_id'];
}
