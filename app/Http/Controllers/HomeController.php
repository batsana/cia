<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fabrica;
use App\Laboratorio;
use App\Classificacao;
use App\Iam;
use App\Entidade;
use App\Sno;
use App\Esquema;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Getiqueta;

// use App\consulta;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $user = Auth()->user();
        // return value($user);

        if ($user->tipoEntidade == 'admin') {
          if ($user->nivel > 0) {
        $referencia = 1;
            }else{
              $referencia =0;
            }
          $var = Getiqueta::query()->where('estado','=','Novo')->count();
            return view('iam.first',compact('var','referencia'));

           
        } 

        // else if ($user->tipoEntidade == 'sno') {
        //     if ($user->nivel > 0) {
        // $referencia = 1;
        //     }else{
        //       $referencia =0;
        //     }
        //     return view('classificacao.index', compact('user'));

        // }






        else if ($user->tipoEntidade == 'fabrica') {
          $user = Auth()->user();
        if ($user->nivel > 0) {
        $referencia = 1;
            }else{
              $referencia =0;
            }
return view('fabrica.first');

        } 

         else if ($user->tipoEntidade == 'companhia') {
          $user = Auth()->user();
              if ($user->nivel > 0) {
        $referencia = 1;
            }else{
              $referencia =0;
            }
            return view('contrato.first');
        } 



         else if ($user->tipoEntidade == 'grafica') {
          $user = Auth()->user();
              if ($user->nivel > 0) {
        $referencia = 1;
            }else{
              $referencia =0;
            }
              $var = Getiqueta::query()->where('estado','=','enviado')->count();
           return view('etiqueta.indexd', compact('var'));
            // echo "grafica entrou";
        } 
        
        


        else if ($user->tipoEntidade == 'laboratorio') {
          $user = Auth()->user();

            if ($user->nivel > 0) {
        $referencia = 1;
            }else{
              $referencia =0;
            }
            return view('iam.lab-init');
        }

         else if ($user->tipoEntidade == 'iamprovincial') {
        
            return view('iam.provincial');
        }


        else if ($user->tipoEntidade == 'cliente') {
          $user = Auth()->user();
         
            
            // $user = Auth()->user();
            $qualify = Esquema::query()
            ->join('contratos','esquemas.contrato_id','=','contratos.id')
            ->join('users','contratos.user_id','=','users.id')
            ->where('users.id',$user->id)
            ->select('esquemas.*','contratos.*')->paginate(2);

            return view('classificacao.cliente',compact('qualify'));
        }


    }

 
}
