<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Certificadoclasse;
use DB;
use PDF;

class CertificadoclasseController extends Controller
{
      public function criar(Request $data){
        $dados;
          Certificadoclasse::query()->create(['quantestenso' => $data['quantestenso'],'marcafardo' => $data['marcafardo'],'quantfardo' => $data['quantfardo'],'navio' => $data['navio'],'destino' => $data['destino'],'pesobruto' => $data['pesobruto'],'pesoliq' => $data['pesoliq'],'classif_id' => $data['classif_id'],'esquema_id' => $data['esquema_id']]);

   $dados['good']=true;

    // return response()->json(['good' => true ]);

   return value ($dados);
      

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
       

    //    public function pdf()
    //    {
    //        $pdf = \App::make('dampdf.wrapper');
    //        $pdf ->loadHTML($this->convert_customer_data_to_html()

    //          $pdf ->stream();
    //        );
    //    }

    //    function convert_customer_data_to_html(){
    //      $customer_data = $this->get_customer_data();
    //      $output = '
    //      <table class="table table-bordered table-striped table-dark" id="datatable">
    //        <thead>
    //             <tr>
    //             <th>NR Contrato</th>
    //             <th>Consignatario</th>
    //             <th>Destino</th>
    //             <th>Marca do Fardo</th>
    //             <th>Port Embark</th>
    //             <th>Periudo</th>
    //           <th>Fabrica</th>                
    //    </thead>
    //      ';
    //       @foreach($certifyc as $fab)
    //         <tr>                                             
    //          <td>{{$fab->quantfardo}}</td>
    //          <td>{{$fab->quantestenso}}</td>
    //          <td>{{$fab->destino}}</td>
    //          <td>{{$fab->marcafardo}}</td>
    //          <td>{{$fab->navio}}</td>
    //         <td>{{$fab->pesobruto}}</td>              
           
    //           {{--   <td>{{$fab->pesolik}}</td> --}}
    //           <td>{{$fab->esquema_id}}</td>
    //           </tr>
    //     @endforeach 

    //    }
     
    // $output .=</table>
    // return $output;
}
