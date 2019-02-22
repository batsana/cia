<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Entidade;
use App\Funcionario;
use DB;

class FuncionarioController extends Controller
{
    public function wekers(Request $data){



      // $user = Auth()->user();
     //    $entidades = Entidade::query()->where('user_id',$user->id)->first()->id;

        $dados;
      
         $user = User::create(['name' => $data['name'],'tipoEntidade' => $data['tipoEntidade'],'nivel' => $data['nivel'], 'email' => $data['email'], 'password' => bcrypt($data['password'])]);  
         
        Funcionario::query()->create(['nome' => $data['nome'],'desiganacao' => $data['desiganacao'],
          'entidade_id' => $data['entidade_id'],'user_id' => $user->id]);

       $dados['is_valid'] = true;

        return value($dados);
  // return view('funcionario.create', compact('entidades'));
      } 



 /////////////////////////////apagar fabrica
    public function apagar($id){
       DB::table('funcionarios')->where('id',$id)->delete();
   
    $funcionarios = Funcionario::query()
  ->join('entidades','funcionarios.entidade_id','entidades.id')
  ->join('users','entidades.user_id','users.id')
  ->select('users.name','funcionarios.*')->paginate(10);
   // $funcionarios = Funcionario::query()->paginate(10);
           
   return view('funcionario.index', compact('funcionarios'));
         
    } 
    public function apagar2($id){
  DB::table('funcionarios')->where('id',$id)->delete();
   $user = Auth()->user()->id;
  $funcionarios =  DB::table('funcionarios')->where('entidade_id',$user)->get();
   return view('funcionario.index2', compact('funcionarios'));
         
    }

    
    //    public function atualfuncionar($id){
    //     $func = Funcionario::find($id);
  
    //     return view('funcionario.edit',compact('func'));
    // }
    public function edit($id){
      // echo $id;
        $funcionario = Funcionario::find($id);
           // $func = Funcionario::find($id)->select('funcionarios.nome','funcionarios.desiganacao')->get();
     // echo $func;
        return view('funcionario.edit',compact('funcionario'));
    }


   

     public function updatfuc(Request $request,$id){

       
         $user = Auth()->user()->id;
        $fab = Funcionario::find($id);
        $fab->nome = $request->input('nome');
        $fab->desiganacao = $request->input('desiganacao');
        $fab->update();

         // $dados['is_valid'] = true;
         // return $dados;
         $resultado = "good";

          $funcionarios = Funcionario::query()
          ->join('entidades','funcionarios.entidade_id','entidades.id')
          ->join('users','entidades.user_id','users.id')
          ->where('entidades.user_id', $user)
          ->select('users.name','funcionarios.*')->paginate(10);
                   
           return view('funcionario.index', compact('funcionarios','resultado')); 
 
    }  

}
