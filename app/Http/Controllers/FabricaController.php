<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Entidade;
use App\Fabrica;
use DB;

class FabricaController extends Controller
{
   
     public function index(){   
        $fabricas = Fabrica::all();
        return view('iam.home', compact('fabricas'));
    }

    
     public function store(Request $data){
     //  $userss = User::all();
     //    $duplica = $data['email'];
     // if ($userss->email == $duplica) {
     //   return 1;
     // }

       $user = User::create(['name' => $data['name'],'tipoEntidade' => $data['tipoEntidade'], 'email' => $data['email'], 'password' => bcrypt($data['password'])]);

        if($data->tipoRegisto !== 'fabrica'){
          Entidade::query()->create([
                'endereco' => $data['endereco'],'telefone' => $data['telefone'],'numerunico' => $data['numerunico'],'user_id'=>$user->id ]);

        }else{
            Fabrica::query()->create([
              'nome' => $data['name'],
                'endereco' => $data['endereco'],'telefone' => $data['telefone'],'numerunico' => $data['numerunico'],'matrizfilial' => $data['matrizfilial'],'user_id'=>$user->id,
                'entidade_id'=> $data['companhia_id']
            ]);
  } 



          $user = Auth()->user();
          $resultado = "good";
            $companhia = Entidade::query()
            ->join('users','entidades.user_id','=','users.id')
            ->where('users.tipoEntidade','=','companhia')
            ->select('users.name','entidades.endereco','entidades.numerunico',
              'entidades.telefone','entidades.id')->get();
             
           return view('auth.register',compact('companhia','resultado'));  
    } 
    // else if($resultado = 'bad'){
           
    //        return view('auth.register',compact('companhia','resultado'));
    // }

    ////////////////////////////////////editar fabrica
    public function edit(Request $request, $id){


       $alg_id = $request["alg_id"];


        $fab = Fabrica::find($id);
  
        return view('iam.edit',compact('fab', 'alg_id'));
    } 
    public function editall($id){
        $fab = Fabrica::find($id);
  
        return view('iam.editall',compact('fab'));
    }

 //////////////////////////////////////////atualizar
    public function update(Request $request,$id){

      $resultado = "good";
      // $this->validate($request,['nome'=>'required','telefone'=>'required','endereco'=>'required']);
  $ido = $request['alg_id'];

        $fab = Fabrica::find($id);
        $fab->nome = $request->input('nome');
        $fab->telefone = $request->input('telefone');
        $fab->endereco = $request->input('endereco');
        $fab->update();

        //   $user = Auth()->user()->id;
          // $fabricas = Entidade::query()
          // ->join('users','entidades.user_id','=','users.id')
          //   ->where('users.tipoEntidade','=','companhia')
          //   ->select('users.name','entidades.*'
          //     )->paginate(10);

  $fabricas = Fabrica::query()
  ->join('entidades','fabricas.entidade_id','=','entidades.id')
  ->join('users', 'fabricas.entidade_id', '=', 'users.id')
    ->where('fabricas.entidade_id','=', $ido)
    ->select('users.name','entidades.numerunico','fabricas.*')->get();

   $id = $ido;
        

             return view('iam.fabricas',compact('fabricas','id','resultado')); 
 
    }  
    public function updatall(Request $request,$id){
   $resultado = "good";

        $fab = Fabrica::find($id);
        $fab->nome = $request->input('nome');
        $fab->telefone = $request->input('telefone');
        $fab->endereco = $request->input('endereco');
        $fab->update();
     $fabricas = Fabrica::all();
     
             return view('iam.fabricasall',compact('fabricas','resultado')); 
 
    }


 /////////////////////////////apagar fabrica
    public function apagar($id){
       DB::table('fabricas')->where('id',$id)->delete();
       
       
       $user = Auth()->user();
  $fabricas = Fabrica::all();
  // ->join('users','entidades.user_id','=','users.id')
  //   ->where('users.tipoEntidade','=','companhia')
  //   ->select('users.name','entidades.*'
  //     )->get();
     return view('iam.fabricas',compact('fabricas')); 
         
    }

    public function fabricas($id){

      $fab = Fabrica::find($id);
      $user = User::find($fab->user_id);

      // $fab->nome => $request('nome');
      // $fab->nome => $request('nome');
      // $fab->nome => $request('nome');

      return view('iam.fabricas',compact('fab','user'));
   
    }
}





