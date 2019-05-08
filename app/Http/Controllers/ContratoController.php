<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fabrica;
use App\Contrato;
use App\Tipoum;
use App\Tipodois;
use App\Tipoters;
use App\Tipoqutro;
use App\User;
use DB;
use Auth;

class ContratoController extends Controller
{




   public function criacao(Request $data){

     // echo $data['contrato_id'];
     // exit;
      
  $ct = Contrato::query()->where('nrcontrato',$data['nrcontrato'])->count();
  if ($ct > 0) {
     return redirect('/ger/cont')->with('resulta', 'O nr. do contrato introduzido ja existe.');
        exit;
  }


    $dat = $data['fimPeriudo'];
    $dar = $data['comPeriudo'];

     // $g = date('Y/m/d',strtotime($dat));
     // $c = date('Y/m/d',strtotime($dar));
     $f = date('Y/m/d',strtotime($data['fimPeriudo']));
     $c = date('Y/m/d',strtotime($data['comPeriudo']));

     // echo $c;
     // exit;

     if ($f < $c) {
       return redirect('/ger/cont')->with('resulta', 'A data do inicio do contrato não deve ser maior que a data do fim.');
        exit;
     }else{

    $u = User::query()->where('email',$data['email'])->count();
      if ($u > 0) {
        return redirect('/ger/cont')->with('resultados', 'O Email introduzido ja foi usado.');
        exit;}



    $dados;
   $cont = Contrato::query()->where('user_id',$data['contrato_id'])->count();
 
     if($cont > 0){
         Contrato::query()->create([
        'consignatario' => $data['consignatario'],
      'estado' => $data['estado'],
      'destino' => $data['destino'],
      'marcafardo' => $data['marcafardo'],
      'portoembarq' => $data['portoembarq'],
      'campanha' => $data['campanha'],
      'nrcontrato' => $data['nrcontrato'],
      'fimPeriudo' => $data['fimPeriudo'],
      'comPeriudo' => $data['comPeriudo'],
      'quantfibra' => $data['quantfibra'],
      'tipoextra' => $data['tipoextra'],
      'tipoum_id' => $data['tipoum_id'],
      'tipdois_id' => $data['tipdois_id'],
      'tipotres_id' => $data['tipotres_id'],
      'tipquatro_id' => $data['tipquatro_id'],
      'entidade_id' =>$data['entidade_id'],
      'user_id' => $data['contrato_id']]);

      return redirect('/ger/cont')->with('resultado', 'Contrato gerado com sucesso.'); 
  
     }else{
     $user = User::create(['name' => $data['name'],'tipoEntidade' => $data['tipoEntidade'], 'email' => $data['email'], 'password' => bcrypt($data['password'])]);

    Contrato::query()->create([
      'consignatario' => $data['consignatario'],
      'estado' => $data['estado'],
      'destino' => $data['destino'],
      'marcafardo' => $data['marcafardo'],
      'portoembarq' => $data['portoembarq'],
      'campanha' => $data['campanha'],
      'nrcontrato' => $data['nrcontrato'],
      'fimPeriudo' => $data['fimPeriudo'],
      'comPeriudo' => $data['comPeriudo'],
      'quantfibra' => $data['quantfibra'],
      'tipoextra' => $data['tipoextra'],
      'tipoum_id' => $data['tipoum_id'],
      'tipdois_id' => $data['tipdois_id'],
      'tipotres_id' => $data['tipotres_id'],
      'tipquatro_id' => $data['tipquatro_id'],
      'entidade_id' =>$data['entidade_id'],
      'user_id' => $user->id
      ]);   
  
    return redirect('/ger/cont')->with('resultado', 'Contrato gerado com sucesso.'); 
  }
   }
}

 public function updatecote(Request $data){
        return $data['id_etiqueta'];
         exit;
     
      
    }

        public function update(Request $request){
       // $user = Auth()->user();
        //if ($user->nivel !== 1) {
        		$dados; 
			        $eti = Contrato::find($_POST['etiqueta_id']);
			        $eti->estado = $_POST['id_estado'];
			        $eti->motivo = $_POST['motivo'];
			        $eti->tecres = 'Administrador';
			        $eti->update(); 
			  
			       $dados ['is_valid']=true;
			       return value($dados);
			     
        	// }	
     
    }  public function upcontrato(Request $request,$id){
     
              $eti = Contrato::find($id);
              $eti->estado = "Homologado";
              $eti->update();  
      return redirect('/listar/contrato')->with('resultados', 'Contrato Homologado com sucesso.'); 
    }



    public function apag($id){
        
       DB::table('contratos')->where('id',$id)->delete();
    return redirect('/listar/contrato')->with('resultado', 'Dados Apagados com sucesso.'); 
         
    }

}

  
