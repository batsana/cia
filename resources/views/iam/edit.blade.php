@extends('master')
@section('content')


<div class="breadcomb-area">
        <div class="container branco" style="padding: 20px 20px 40px 20px; border: 1px solid #79b85e; max-width: 1090px;">
<h1>Actualizar Dados da Fábrica</h1>
         <div class="mb40" style="display: block;"></div>               
        <form method="post" action="{{ url('/fabrica/'.$fab->id)}}">
  <input type="hidden" name="alg_id" value="{{ $alg_id }}">
                            {{ method_field('PUT') }}
                            {{ csrf_field() }}
                        <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Nome da Fábrica</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="text" value="{{$fab->nome}}" id="nome" name="nome" class="form-control input-sm" placeholder="Nome da Fábrica">
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="form-example-int form-horizental mg-t-15">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Telefone</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="text" name="telefone" value="{{$fab->telefone}}" class="form-control input-sm" placeholder="Telefone">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int form-horizental mg-t-15">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Endereço</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="text" value="{{$fab->endereco}}" name="endereco" class="form-control input-sm" placeholder="Endereço">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <div class="form-example-int mg-t-15">
                            <div class="row">
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                </div>
                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
 <button type="submit" value="save" class="button-alt grayb">Actualizar</button>
 <button href="#" value="save" class="button-alt grayb">&laquo; Voltar</button>
                                </div>
                            </div>
                        </div>
                        </form>


        </div>
    </div>

@endsection 

