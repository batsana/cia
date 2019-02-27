<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classificacao;
use App\Fabrica;
use App\Entidade;
use DB;

class ClassificacaoController extends Controller
{
 /////////////////////////////////////////////////////////////////////////////////////////////////////  
    protected function create(Request $data){
    
     
 $dados;
     // $nrfa = strlen($data['barcod']);

    $nrFardo =substr($data['barcod'], 13,6);
    $nrFardo = ltrim($nrFardo);
    



 Classificacao::query()->create(['barcod' => $data['barcod'],'lista' => $data['lista'],'numerofardo' => $nrFardo,'grau' => $data['grau'],'pesolik' => $data['pesolik'],'pesobru' => $data['pesobru'],'fabrica_id'=>$data['fabrica_id'],'entidade_id'=>$data['entidade_id'],'lote'=>$data['lote'],'sacha' => $data['sacha'],'sacha1' => $data['sacha1']]);
  $dados['is_valid']=true;

 return value($dados);
        }



        public function index(){
             $classif = Classificacao::all();
            return view('welcome',compact('classif'));
        }


          public function apagar($id){
       DB::table('classificacaos')->where('id',$id)->delete();
        $classificacaos = Classificacao::all();
           return view('classificacao.indexre',compact('classificacaos')); 
         
    }

    public function getCodigobarDisponiveis(){
        $data = $_POST['quantifardo']; $hora = $_POST['quantifardo'];
        $adicao = Classificacao::query()->where('quantifardo',$quantifardo)->where('lote',$lote)->pluck('classificacao_id')->toArray(); //

        $classificacao = Classificacao::query()->whereNotIn('id',$adicao)->get();

        return response()->json(array('clas'=>$classificacao));
    }
        
////////////////////////////////////////////////////////////
      public function  classificar(){

        //return $_POST['id_etiqueta'];

        $dados;
    
         $cl = Classificacao::find($_POST['id_etiqueta']);
         $cl->tipo = $_POST['tipo'];
         $cl->comprimento = $_POST['comprimento'];
         $cl->estado = $_POST['estado'];
         $cl->obser = $_POST['obser'];
         $cl->agentelabor = $_POST['agentelabor'];
         $cl->update();

         $dados['is_valid'] = true;
         return $dados;
 
   
     // return 1;
    }
      
    
}
