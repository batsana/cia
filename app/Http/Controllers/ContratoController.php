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
    $dados;
     if($data->contrato_id == 0){

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
     }else{
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
     }
   $dados ['is_valid']=true;

 return value($dados);

  
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
     
    }

    public function apag($id){
        
       DB::table('contratos')->where('id',$id)->delete();
    return redirect('/listar/contrato')->with('resultado', 'Dados Apagados com sucesso.'); 
         
    }

}

  
