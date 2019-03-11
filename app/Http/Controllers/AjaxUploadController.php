<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Getiqueta;
use App\Funcionario;
use Auth;

class AjaxUploadController extends Controller
{
   function index()
    {
     return view('ajax_upload');
    }

    function action(Request $request)
    {
      // $new_name = null;


     $validation = Validator::make($request->all(), [
      'select_file' => 'required|mimes:pdf|max:10048'
      //'select_file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
     ]);
     if($validation->passes()){
   
      $pdf = $request->file('select_file');
      $new_name = rand() . '.' . $pdf->getClientOriginalExtension();
      $pdf->move(public_path('pdf'), $new_name);
          

       $user = Auth()->user();
       if ($user->nivel == 1) {
       	  $f = Funcionario::query()->where('user_id',$user->id)->first()->nome; 

        $eti = Getiqueta::find($request["id_etiq"]);
        $eti->estado = 'Enviado';
        $eti->pdfs = $new_name;
        $eti->tecres = $f;
        $eti->update();
       }elseif ($user->nivel !== 1) {
       	$eti = Getiqueta::find($request["id_etiq"]);
        $eti->estado = 'Enviado';
        $eti->pdfs = $new_name;
        $eti->tecres = 'Administrador';
        $eti->update();
       }
     


      return response()->json([
       'message'   => 'PDF Carregado com Sucesso.',
       /*'uploaded_image' => '<img src="/pdf/'.$new_name.'" class="img-thumbnail" width="300" />',*/
       'class_name'  => 'alert-success'
      ]);
     }
     else
     {
      return response()->json([
       /*'message'   => $validation->errors()->all(),*/
       'message'   => 'Verifique se a extensão do ficheiro é PDF e o tamanho não excede 10MB.',
       'uploaded_image' => '',
       'class_name'  => 'alert-danger'
      ]);
     }
      
     

    }

  
}
