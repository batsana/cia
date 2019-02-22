<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fabrica;
use App\Contrato;
use App\Esquema;
use App\User;
use App\Classificacao;
use App\Funcionario;
use App\Entidade;
use App\Fatura;
use DB;

class EsquemaController extends Controller
{
    public function geraracao(Request $request){ 

     $act = $request['adi'];
  
      
                 $f = explode(',', $act);

          Classificacao::whereIn('id', $f)->update(['estadovend' => "v"]);
     

          $dados;
        $dataActual = date('Y-m-d');
        $data = DB::table('contratos')->where('comPeriudo', '<',  $dataActual)
                                          ->where('fimPeriudo', '>=',  $dataActual)
                                          ->where('id', $request->contrato_id)->count();
         
         
          $contrato = Contrato::find($request->contrato_id);
          $contrato->quantfibra = $contrato->quantfibra - $request['quantidade'];
          $contrato->update();

       $fact = Fatura::query()
           ->join('certificadonacionals','faturas.nacionals_id','=','certificadonacionals.id')
           ->join('certificadoclasses','certificadonacionals.certif_id','certificadoclasses.id')
           ->join('esquemas','certificadoclasses.esquema_id','esquemas.id')
           ->join('contratos','esquemas.contrato_id','contratos.id')
           ->where('esquemas.contrato_id',$request->contrato_id)->get();


             $libra = $request['pesoliq'];
             $librado = $libra * 2.2046;
              if($request['tipo'] == '1'){

                $valortotal = $librado * $contrato->tipoum_id;

             }elseif($request['tipo'] == '2'){
              $valortotal = $librado * $contrato->tipdois_id;

            }elseif($request['tipo'] == '3'){
                $valortotal = $librado * $contrato->tipotres_id;

            }elseif ($request['tipo'] == '4'){

              $valortotal = $librado * $contrato->tipquatro_id;
            }elseif($request['tipo'] == '0'){
              $valortotal = $librado * $contrato->tipoextra;
            }      
             $iampercent = $valortotal * 0.35;

            if($contrato->quantfibra >= $request->quantidade) {          
              if ($contrato->estado == 'Homologado')  {

                $arr = (array)$fact;

             if(sizeof($arr) == 0){
                
           Esquema::query()->create(['tipo' =>$request['tipo'],'nrcertific' => $request['nrcertific'],'quantfardo' => $request['quantidade'],'comprimentofibra' => $request['comprimentofibra'],'nrocorespond' => $request['nrocorespond'],'pesobruto' => $request['pesobruto'],'lote' => $request['lote'],'nrcertific' => $request['nrcertific'],'entidade_id' => $request['entidade_id'],'contrato_id' => $request['contrato_id'],
              'pesoliq' => $libra,
              'libraspeso'=> $librado,
              'valortotal'=>$valortotal,
              'iampercent'=> $iampercent]);

                 $dados['is_valid']=true;
                return value($dados); 


                 } else {
               
                  foreach ($fact as $key=>$val) {
                 $f = explode(':', $val);

                  if($f[1] == '"np"}') {
                   $dados['statusa']=true; 
                   return value($dados);
                   exit;
                  }
                  
                  }

                    Esquema::query()->create(['tipo' =>$request['tipo'],'nrcertific' => $request['nrcertific'],'quantfardo' => $request['quantidade'],'comprimentofibra' => $request['comprimentofibra'],'nrocorespond' => $request['nrocorespond'],'pesobruto' => $request['pesobruto'],'lote' => $request['lote'],'nrcertific' => $request['nrcertific'],'entidade_id' => $request['entidade_id'],'contrato_id' => $request['contrato_id'],
                      'pesoliq' => $libra,
                      'libraspeso'=> $librado,
                      'valortotal'=>$valortotal,
                      'iampercent'=> $iampercent]);

                         $dados['is_valid']=true;
                        return value($dados); 
       

              }


            }else {
                $dados['status']=true; 
                return value($dados);
                }

                }

                else{
                $dados['quantia']=true; 
                return value($dados);
             }


           }

        public function adicionando(Request $request){
           $cont = $request['cont'];
       $lote = $request['lote'];
       $q = $request['quantidade'];
       $tip= $request['tipo'];

        $user = Auth()->user();
       $entidade_id = Entidade::query()->where('user_id',$user->id)->first()->id;
      $fun = Funcionario::query()->join('entidades','funcionarios.entidade_id','funcionarios.id')
      ->where('funcionarios.entidade_id',$entidade_id)->get();

     $cl= Classificacao::query()->where('lote','=',$lote)->where('tipo',$tip)->where('estadovend','=','nv')->where('entidade_id','=', $entidade_id)->limit($q)->get()->count();

if ($cl < $q) {

           if ($cl == 0) {
            return 0;
           } else {

            return $cl;
            exit;
          } 

        } else {
 $cl= Classificacao::query()->where('lote','=',$lote)->where('tipo',$tip)->where('entidade_id','=', $entidade_id)->limit($q)->get();
 
       return response()->json(array('dados'=>$cl, 'z'=>1));


           }
       
      }
  }   
