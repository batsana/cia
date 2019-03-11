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
    
          Certificadoclasse::query()->create(['quantestenso' => $data['quantestenso'],'marcafardo' => $data['marcafardo'],'quantfardo' => $data['quantfardo'],'navio' => $data['navio'],'destino' => $data['destino'],'pesobruto' => $data['pesobruto'],'pesoliq' => $data['pesoliq'],'classif_id' => $data['classif_id'],'esquema_id' => $data['esquema_id']]);



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
