<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
 //  public function delete($id){
 //       DB::table('entidades')->where('id',$id)->delete();
 //  $fabricas = Entidade::query()
	// ->join('users','entidades.user_id','=','users.id')
	// 	->where('users.tipoEntidade','=','companhia')
	// 	->select('users.name','entidades.endereco','entidades.numerunico','entidades.telefone')->get();
 //       return view('iam.home',compact('fabricas'));  
 //    }
}
