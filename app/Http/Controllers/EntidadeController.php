<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entidade;
use App\Fabrica;
use DB;
use App\User;

class EntidadeController extends Controller
{

//////////////////////////////apagar grafica
   public function apagar($id){
   DB::table('entidades')->where('id',$id)->delete();
  return redirect('/listar/laboratorio')->with('resultado', 'Laboratorio Apagado com sucesso.');
}

 public function apagargra($id){
   DB::table('entidades')->where('id',$id)->delete();
return redirect('/listar/grafica')->with('resultado', 'Dados Apagados com sucesso.');

}




///////////////////////////////////////////apagar companhia
public function apagarComp($id){
   DB::table('entidades')->where('id',$id)->delete();

return redirect('/listar/algudoeira')->with('resultado', 'Dados Apagados com sucesso.'); 
}

public function apagariam($id){
   DB::table('entidades')->where('id',$id)->delete();
   return redirect('/listar/iam')->with('resultado', 'Dados Apagados com sucesso.');


}

////////////////////edicao da companhia/////****laboratorio
  function editado($id){
   $resultado = "good";
     $ent = Entidade::find($id);
         $user = User::find($ent->user_id);

      // $ent->name = $request->input('name');
      //   $ent->telefone = $request->input('telefone');
      //   $ent->endereco = $request->input('endereco');

        $ent->update();
        $user->update();

        return view('iam.edicao',compact('ent','user'));

  }

    public function update(Request $request,$id){
      $resultado = "good";
       $ent = Entidade::find($id);

        $user = User::find($ent->user_id);

        $ent->numerunico = $request->input('numerunico');
        $ent->telefone = $request->input('telefone');
        $ent->endereco = $request->input('endereco');
        $user->name = $request->input('name');
        $ent->update();
        $user->update();
 
       $user = Auth()->user();
        $algo = Entidade::query()
        ->join('users','entidades.user_id','=','users.id')
          ->where('users.tipoEntidade','=','companhia')
          ->select('users.name','entidades.*'
            )->paginate(10);
     return view('iam.home',compact('algo','user','resultado'));         
    } 



    function editadografica($id){

      $ent = Entidade::find($id);
      $user = User::find($ent->user_id);
        return view('iam.editgra',compact('ent','user'));
    }



public function updategra(Request $request,$id){
 
       $ent = Entidade::find($id);
        $user = User::find($ent->user_id);

        $user->name = $request->input('name');
        $ent->telefone = $request->input('telefone');
        $ent->endereco = $request->input('endereco');

        $user->update();
        $ent->update();
      return redirect('/listar/grafica')->with('resultado', 'Dados Atualizados com sucesso.');
        }



 function editadolab($id){
      $ent = Entidade::find($id);
        $user = User::find($ent->user_id);
     

        return view('iam.edetilab',compact('ent','user'));
    }

        

     public function updatelab(Request $request,$id){
$resultado = "good";
       $ent = Entidade::find($id);
         $user = User::find($ent->user_id); 

        $ent->numerunico = $request->input('numerunico');
        $ent->telefone = $request->input('telefone');
        $ent->endereco = $request->input('endereco');

       $user->name = $request->input('name');
       
        $ent->update();
        $user->update();


 return redirect('/listar/laboratorio')->with('resultado', 'Dados Atualizados com sucesso.');        
        }


///////////listar fabricas correspondentes a companhia selecionada
  public function suas($id){
  
       $fabricas = Fabrica::query()
	->join('entidades','fabricas.entidade_id','=','entidades.id')
	->join('users', 'fabricas.entidade_id', '=', 'users.id')
		->where('fabricas.entidade_id','=', $id)
		->select('users.name','fabricas.*')->get();


// $fabricas = Fabrica::query()->join('medicos','consultas.tipoMedico','=','medicos.area')
//                 ->select('consultas.*')->where('user_id','=',$user->id)->where('estado','=','marcada')->whereDate('dataHora','>=',DB::raw('CURDATE()'))
//                 ->orderBy('dataHora')

		 return view('iam.fabricas',compact('fabricas','id'));
  }

  function editiam($id){
    $ent = Entidade::find($id);
    $users = User::find($ent->user_id);
    return view('iam.editiam',compact('ent','users'));
  }

  public function updatiam(Request $request, $id){
    $resultado = "good";
    $ent = Entidade::find($id);
    $users = User::find($ent->user_id);

    $ent->telefone = $request->input('telefone');
    $ent->endereco = $request->input('endereco');

    $users->name = $request->input('name');

    $users->provincia = $request->input('provincia');

    $ent->update();
    $users->update();

    $entidade = Entidade::query()
  ->join('users','entidades.user_id','=','users.id')
    ->where('users.tipoEntidade','=','iamprovincial')
    ->select('users.*','entidades.*')->paginate(10);
return view('iam.iam',compact('entidade','resultado')); 
  }

}