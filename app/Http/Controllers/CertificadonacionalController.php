<?php

namespace App\Http\Controllers;

use App\Certificadonacional;
use Illuminate\Http\Request;
use DB;
use App\Certificadoclasse;
use App\Contrato;
// use App\Certificadoclasse;

class CertificadonacionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
        public function criar(Request $data){
           // $g = Certificadonacional::query()->where('')

        $dados;
        
          Certificadonacional::query()->create(['marcafardo' => $data['marcafardo'],'quantfardo' => $data['quantfardo'],'destino' => $data['destino'],'pesobruto' => $data['pesobruto'],'pesoliq' => $data['pesoliq'],'certif_id' => $data['certif_id'],'contrato_id' => $data['contrato_id'],'ref' => $data['ref']]);

      $dados['is_valid']= true;
      return value($dados);



      // $nacional = Certificadonacional::query()
      // ->join('contratos','certificadonacionals.contrato_id','=','contratos.id')
      // ->select('contratos.consignatario','certificadonacionals.*')->get();
      // return view('certinacional.index',compact('nacional'));

    } 
    public function entrega($id){
        $sent = Certificadoclasse::find($id);
  $contrato = Contrato::all();
      return view('certinacional.certficadonacional',compact('sent','contrato'));
      

    }



 // public function edit($id){
 //        $fab = Fabrica::find($id);
 //        return view('iam.edit',compact('fab'));
 //    }




            public function apagarcertnac($id){
           DB::table('certificadonacionals')->where('id',$id)->delete();


            $fabricas = DB::table('fabricas')
        ->join('entidades', 'fabricas.entidade_id', '=', 'entidades.id')
        ->join('users', 'fabricas.entidade_id', '=', 'users.id')
        ->select('fabricas.*', 'entidades.id as fabrica_id','users.*')->get();

             $nacional = DB::table('certificadonacionals')
           ->join('contratos', 'certificadonacionals.contrato_id', '=', 'contratos.id')
           ->join('certificadoclasses', 'certificadonacionals.certif_id', '=', 'certificadoclasses.id')
            ->select('contratos.*', 'certificadonacionals.*')->get(); 

      return view('certinacional.index',compact('nacional'));   
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Certificadonacional  $certificadonacional
     * @return \Illuminate\Http\Response
     */
    public function show(Certificadonacional $certificadonacional)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Certificadonacional  $certificadonacional
     * @return \Illuminate\Http\Response
     */
    public function edit(Certificadonacional $certificadonacional)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Certificadonacional  $certificadonacional
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Certificadonacional $certificadonacional)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Certificadonacional  $certificadonacional
     * @return \Illuminate\Http\Response
     */
    public function destroy(Certificadonacional $certificadonacional)
    {
        //
    }
}
