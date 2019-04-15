<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Certificadoclasse;
use PDF;
use App\Getiqueta;
use App\Esquema;
use App\Fatura;
use App\Contrato;
use App\Certificadonacional;
use App\Fabrica;
use App\Entidade;
use App\User;
use DB;


class DocController extends Controller
{
    

     public function index(Request $request) {


        $certifyc = Certificadoclasse::query()
      ->join('esquemas','certificadoclasses.esquema_id','=','esquemas.id')
      ->join('contratos','esquemas.contrato_id','=','contratos.id')
        // ->where('users.tipoEntidade','=','laboratorio')
      ->select('contratos.consignatario','certificadoclasses.*')->get();


        return view('certifyn.index',['certifyc' => $certifyc]);
    }
    

     public function report($id)
    {
         $dataActual = date('Y-m-d');
  
         $certifyc = Certificadoclasse::find($id);
          $esqm = Esquema::find($certifyc->esquema_id);
          $contrato = Contrato::find($esqm->contrato_id);
          $fabri = Entidade::find($contrato->entidade_id);
          $fabrica = User::find($fabri->user_id);
            $view = View('certifyn.report', compact('certifyc','esqm','contrato','fabrica','fabri','dataActual'));
            $pdf = \App::make('dompdf.wrapper');
            $pdf->loadHTML($view->render());
            return $pdf->stream();

    }  
    
    public function reportar($id) {
     $certifyc = Esquema::find($id);
    if (is_null($certifyc)) {
    	return redirect('/lista/esquema')->with('resultado', 'Esquemas nao registada.'); 


    	exit;
    }else{
     $contrato = Contrato::find($certifyc->contrato_id);
     $ents = Entidade::find($contrato->entidade_id);
     $ent = User::find($ents->user_id);
 }
       $view = View('esquema.relatorio', compact('certifyc','contrato','ent','ents'));
     $pdf = \App::make('dompdf.wrapper');
     $pdf->loadHTML($view->render())->setPaper('a4', 'landscape');
     return $pdf->stream();
 
}
public function fatured($id) {
	  $cod = Fatura::find('$id');
    // $esk = Fatura::query()->join('certificadonacionals','faturas.nacionals_id','certificadonacionals.id') 
    // ->join('certificadoclasses','certificadonacionals.certif_id','certificadoclasses.id')
    // ->join('esquemas','certificadoclasses.esquema_id','esquemas.id')
    // ->where('faturas.id',$id)
    // ->select('esquemas.*')->get();
      
     

     $certifyc = Fatura::find($id);
     $nacional = Certificadonacional::find($certifyc->nacionals_id);
     $nacio = Certificadoclasse::find($nacional->certif_id);

     $esk = DB::table('esquemas')->where('contrato_id',$nacional->contrato_id)->get();

     // $de = DB::table('esquemas')->where('contrato_id',5)->pluck('valortotal');
 

     //  return $de;
     // exit;

     //  $f = explode('[', $de);

     //  $fa = explode(']', $f);

     // return $fa;
     // exit;

    //  foreach ($de as $cc)  
    //        $dr = $cc ++
    // return $dr;

    // exit;



     $view = View('fatura.report', compact('certifyc','nacional','esk'));
     $pdf = \App::make('dompdf.wrapper');
     $pdf->loadHTML($view->render());
     return $pdf->stream();
 
}


///////////////////////////////////////////////////////////////////
    
    public function reportario($id) {
     $certifyc = Getiqueta::find($id);
     $fabr = Fabrica::find($certifyc->fabrica_id);
    $lab = Entidade::find($certifyc->entidade_id);
    $nan = User::find($lab->user_id);

    $n = $certifyc->inetervalo + $certifyc->quantidade;
     $view = View('etiqueta.reports', compact('certifyc','fabr','nan','n'));
     $pdf = \App::make('dompdf.wrapper');
     $pdf->loadHTML($view->render());
     return $pdf->stream();

    }  
    public function repor($id) {

        $cod = Fatura::find('$id');
    // $esk = Fatura::query()->join('certificadonacionals','faturas.nacionals_id','certificadonacionals.id') 
    // ->join('certificadoclasses','certificadonacionals.certif_id','certificadoclasses.id')
    // ->join('esquemas','certificadoclasses.esquema_id','esquemas.id')
    // ->where('faturas.id',$id)
    // ->select('esquemas.*')->get();
      
     

     $certifyc = Fatura::find($id);
     $nacional = Certificadonacional::find($certifyc->nacionals_id);
     $nacio = Certificadoclasse::find($nacional->certif_id);
     $esk = DB::table('esquemas')->where('contrato_id',$nacional->contrato_id)->get();
     // $esk = DB::table('esquemas')->where();


  


     $view = View('fatura.report', compact('certifyc','nacional','esk'));
     $pdf = \App::make('dompdf.wrapper');
     $pdf->loadHTML($view->render());
     return $pdf->stream();

    }
    public function rap($id) {
        
     $certifyc = Certificadonacional::find($id);
     $contrato = Contrato::find($certifyc->contrato_id);
     $nacio = Certificadoclasse::find($certifyc->certif_id);
     $esk = Esquema::find($nacio->esquema_id);
     $fabric = Fabrica::find($esk->fabrica_id);
     $view = View('certinacional.report', compact('certifyc','contrato','fabric'));
     $pdf = \App::make('dompdf.wrapper');
     $pdf->loadHTML($view->render());
     return $pdf->stream();

    }



/////////////////////////////////////////////////////////////////////////////////////////////////////////

   public function edit($id){
       $certifyc = Getiqueta::find($id);
        return view('etiqueta.print',['certifyc' => $certifyc]);
        return Redirect::route('reports', array($id));
    }

 public function reports($id, Request $request)
    {
          $certifyc = Getiqueta::find($id);
         
        if($request->view_type === 'download') {
            $pdf = PDF::loadView('etiqueta.print', ['certifyc' => $certifyc]);
            return $pdf->download('certifyc.pdf');
        } else {
            $view = View('etiqueta.reports', ['certifyc' => $certifyc]);
            $pdf = \App::make('dompdf.wrapper');
            $pdf->loadHTML($view->render());
            return $pdf->stream();
        }
 
    }

}

   

