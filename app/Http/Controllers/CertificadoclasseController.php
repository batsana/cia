<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Certificadoclasse;
use DB;
use PDF;
use App\Esquema;

class CertificadoclasseController extends Controller
{
      public function criar(Request $data){

        // $u = $data['esquema_id'];

       $f = Certificadoclasse::query()->where('ref',$data['ref'])->count();

        if ($f > 0) {
         return redirect('/gestao/cetificate')->with('resultado', 'A referência do esquema ja foi usada.'); 
         exit;
        }
    
          Certificadoclasse::query()->create(['ref' => $data['ref'],'navio' => $data['navio'],'destino' => $data['destino'],'classif_id' => $data['classif_id'],'esquema_id' => $data['esquema_id']]);



     return redirect('/gestao/cetificate')->with('resultado', 'Certificado gerado com sucesso com sucesso.'); 
       

    }


       public function apag($id){
       DB::table('certificadoclasses')->where('id',$id)->delete();

         $certifyc = Certificadoclasse::all();
         return view('certifyn.index',compact('certifyc'));   
        }   

        public function apagao($id){
       DB::table('certificadoclasses')->where('id',$id)->delete();

         $certifyc = Certificadoclasse::all();
         return view('certifyn.index',compact('certifyc'));   
        }
       

}
