<?php

namespace App\Http\Controllers;

use App\Certificadoclass;
use Illuminate\Http\Request;

class CertificadoclassController extends Controller
{


    public function criar(Request $data){
        
          Certificadoclass::query()->create(['quantestenso' => $data['quantestenso'],'marcafardo' => $data['marcafardo'],'quantfardo' => $data['quantfardo'],'navio' => $data['navio'],'destino' => $data['destino'],'pesobruto' => $data['pesobruto'],'pesoliq' => $data['pesoliq'],'classif_id' => $data['classif_id'],'esquema_id' => $data['esquema_id']]);
      
      $certifyc = Certificadoclass::all();
      return view('certifyn.index',compact('certifyc'));

    }


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
     * @param  \App\Certificadoclass  $certificadoclass
     * @return \Illuminate\Http\Response
     */
    public function show(Certificadoclass $certificadoclass)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Certificadoclass  $certificadoclass
     * @return \Illuminate\Http\Response
     */
    public function edit(Certificadoclass $certificadoclass)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Certificadoclass  $certificadoclass
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Certificadoclass $certificadoclass)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Certificadoclass  $certificadoclass
     * @return \Illuminate\Http\Response
     */
    public function destroy(Certificadoclass $certificadoclass)
    {
        //
    }
}
