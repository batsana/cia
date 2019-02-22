<?php

namespace App\Http\Controllers;

use App\Classificacaohvi;
use Illuminate\Http\Request;
use DB;

// use App\Classificacaohvi;

class ClassificacaohviController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */



    public function apag($id){

       DB::table('classificacaohvis')->where('id',$id)->delete();
        $classicacaos = Classificacaohvi::all();
     return view('classificacao.indexh', compact('classicacaos')); 
         
    }

       public function updathvi(){
      
         // $classificacaos = Classificacaohvi::query()->paginate(10);

         // $dados;
        $eti = Classificacaohvi::find($_POST['etiqueta_id']);
        $eti->estado = 'validado';
        $eti->obser = $_POST['obser'];
        $eti->update();

        return "good";
 
        // return $_POST['etiqueta_id'];
        // return $_POST['etiqueta_id'];
        
        // return view('classificacao.indexh', compact('res','classificacaos'));
        
    }  


    public function updathvi2(){
         // $dados;
        $eti = Classificacaohvi::find($_POST['etiqueta_id2']);
        $eti->estado = 'invalidado';
        $eti->obser = $_POST['obser2'];
         $eti->update();

         return "goods";
    } 

    
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
     * @param  \App\Classificacaohvi  $classificacaohvi
     * @return \Illuminate\Http\Response
     */
    public function show(Classificacaohvi $classificacaohvi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Classificacaohvi  $classificacaohvi
     * @return \Illuminate\Http\Response
     */
    public function edit(Classificacaohvi $classificacaohvi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Classificacaohvi  $classificacaohvi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Classificacaohvi $classificacaohvi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Classificacaohvi  $classificacaohvi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classificacaohvi $classificacaohvi)
    {
        //
    }
}
