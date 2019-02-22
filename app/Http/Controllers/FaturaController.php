<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;
use App\Fatura;

class FaturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         
    }


 // $varlik = $data['pesoliquido'];
   // $vartotal = $data['total'];

   // $varlibra = $varlik*2.2046;
   //  $vartotal = $varlibra*0.8400;
 public function criar(Request $data){
  
        $dados;

    Fatura::query()->create(['numerofatura' => $data['numerofatura'],'transformacao' => $data['transformacao'],
     'liquidacao' => $data['liquidacao'],'condices' => $data['condices'],'mercadoria' => $data['mercadoria'],
     'embalagem' => $data['embalagem'],'marcas' => $data['marcas'],'observacoes' => $data['observacoes'],
     'tipo' => $data['tipo'],'fibra' => $data['fibra'],'pesoliquido' => $data['pesoliquido'],'nacionals_id' => $data['nacionals_id'],'fardos' => $data['fardos']]);
    
  $dados ['boa']=true;

 return value($dados);

   }

     // public function criar(Request $data){
  
        // $dados;

    // Fatura::query()->create(['numerofatura' => $data['numerofatura'],'transformacao' => $data['transformacao'],
    //  'liquidacao' => $data['liquidacao'],'condices' => $data['condices'],'mercadoria' => $data['mercadoria'],
    //  'embalagem' => $data['embalagem'],'marcas' => $data['marcas'],'observacoes' => $data['observacoes'],
    //  'tipo' => $data['tipo'],'fibra' => $data['fibra'],'pesoliquido' => $data['pesoliquido'],'nacionals_id' => $data['nacionals_id'],'fardos' => $data['fardos']]);
    
 //  $dados ['boa']=true;

 // return value($dados);
        // return 1;

   // }


  public function delete($id){
       DB::table('faturas')->where('id',$id)->delete();
    $faturas = Fatura::all();
     
     return view('fatura.index',compact('faturas'));
         
    }

      public function editer($id){
        $ent = Fatura::find($id);
        return view('fatura.detalhes',compact('ent'));
    }

    
        public function updat(){
        $eti = Fatura::find($_POST['etiqueta_id']);
        $eti->estado = 'pago';
        $eti->update();

        return "good";
        
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
     * @param  \App\Fatura  $fatura
     * @return \Illuminate\Http\Response
     */
    public function show(Fatura $fatura)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fatura  $fatura
     * @return \Illuminate\Http\Response
     */
    public function edit(Fatura $fatura)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fatura  $fatura
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fatura $fatura)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fatura  $fatura
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fatura $fatura)
    {
        //
    }
}
