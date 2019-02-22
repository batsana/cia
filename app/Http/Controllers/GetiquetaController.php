<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fabrica;
use App\Funcionario;
use App\User;
use App\Grafica;
use App\Getiqueta;
use App\Entidade;
use App\Classificacaohvi;
use App\Classificacao;
use DB;
use Response;
use Auth;

class GetiquetaController extends Controller
{
    public function create(Request $data){
       
         $ultmo = Getiqueta::query()->orderBy('id','desc')->first()->inetervalo;

        $last = $data['inetervalo'];
        $latest = $last + $ultmo;
        // se o numero do intervalo for superior ao limite estabelecido///////////////////////////////// recomecar a contagem . 
            $u = $latest;
        if ($latest > 3000) {
          $la  = $u - 3000;

           // echo $latest;
           // exit; 
          $c = Classificacao::take(1)->get(); //deletar um numero espesifico de linhas//
             foreach ($c as $cc)   //ciclo para deletar um numero espesifico de linhas//
            DB::table('classificacaos')->where('id',$cc->id)->delete(); //method deletar as linhas//
            // echo "  todos objectos eliminados " ;


         $faril = $data['fabrica_id'];
         $te = Getiqueta::query()->where('fabrica_id',$faril)->count(); // pegar etiquetas cujo a fabrica e igual a fabrica indicada acima//

       if ($te > 0) { //se encontrar registo de etiquetas//
         $te = Getiqueta::query()->where('fabrica_id',$faril)->first()->id;   
         $fab = Getiqueta::find($te); //encontrar etiqueta para atualizar//
          $ultmo = Getiqueta::query()->orderBy('id','desc')->first()->inetervalo;//o maximo nr numero de etiquetas//

        $last = $data['inetervalo'];
        $latest = $last + $ultmo;
        $fab->quantidade = $data['inetervalo'];
        $fab->tipoet = $data['tipoet'];       
        $fab->inetervalo =$la;
        $fab->update();
        return redirect('/registar/etiqueta')->with('resultado', 'Pedido efectuado com sucesso.'); 
       

      }else{//se nao encontrar etiqueta para atualizar entao salva//
         Getiqueta::query()->create(['tipoet' => $data['tipoet'],'quantidade' => $data['inetervalo'],'pdfs' => $data['pdfs'],'inetervalo' => $la,'entidade_id' => $data['entidade_id'],'fabrica_id' => $data['fabrica_id']]);

               return redirect('/registar/etiqueta')->with('resultado', 'Pedido efectuado com sucesso.');
        // echo "nao encontrado";
      }
         }else{ //se numero do intervalo nao for superior ao estabelecido , grava e atualiza sem recomecar a contagem.
          $faril = $data['fabrica_id'];
         $te = Getiqueta::query()->where('fabrica_id',$faril)->count(); 

       if ($te > 0) {
         $te = Getiqueta::query()->where('fabrica_id',$faril)->first()->id;   
         $fab = Getiqueta::find($te); 
          $ultmo = Getiqueta::query()->orderBy('id','desc')->first()->inetervalo;

        $last = $data['inetervalo'];
        $latest = $last + $ultmo;
        $fab->quantidade = $data['inetervalo'];
        $fab->tipoet = $data['tipoet'];       
        $fab->inetervalo =$latest;
        $fab->update();
        return redirect('/registar/etiqueta')->with('resultado', 'Pedido efectuado com sucesso.'); 
       

      }else{
         Getiqueta::query()->create(['tipoet' => $data['tipoet'],'quantidade' => $data['inetervalo'],'pdfs' => $data['pdfs'],'inetervalo' => $latest,'entidade_id' => $data['entidade_id'],'fabrica_id' => $data['fabrica_id']]);

               return redirect('/registar/etiqueta')->with('resultado', 'Pedido efectuado com sucesso.');
        // echo "nao encontrado";
      }
        }
         
}

    public function index(){
    	 $cla = Getiqueta::all();
    	 return $cla;
            // return view('etiqueta.index',compact('cla'));
    }


     public function edit($id){
        $fab = Getiqueta::find($id); 
        return response()->json($fab);
    }

     public function editEtiqueta(Request $request){

        $fab = Getiqueta::find($request["id_etiqueta"]); 
        $fab->estado=$request["estado"];
        $fab->update();

        return response()->json($fab);
    }

 //////////////////////////////////////////atualizar
    public function update(Request $request){
    $user = $request['userId']; 
    $u = User::query()->where('id',$user)->first()->nivel;

    if ($u !== 1) {
        $eti = Getiqueta::find($_POST['etiqueta_id']);
        $eti->estado = $_POST['id_estado'];
        $eti->motivo = $_POST['motivo'];
        $eti->tecres = 'Administrador';
        $eti->pdfs = '';
        $eti->update();
         
        }
        elseif($u == 1){
        
        $f = Funcionario::query()->where('user_id',$user)->first()->nome;

        $eti = Getiqueta::find($_POST['etiqueta_id']);
        $eti->estado = $_POST['id_estado'];
        $eti->motivo = $_POST['motivo'];
         $eti->pdfs = '';
        $eti->tecres = $f;
        $eti->update();
        }
 
           return view('etiqueta.index',compact('cla')); 
 
    }  

    public function updathvi(){


 $daddos;
        $eti = Classificacaohvi::find($_POST['etiqueta_id']);
        $eti->estado = $_POST['id_estado'];
        $eti->update();
        
       
       $dados['is_valid']=true;  
        return value($dados);
 
    }  

}
