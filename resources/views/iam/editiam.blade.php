
@extends('master')
@section('content')


<div class="breadcomb-area">
        <div class="container branco" style="padding: 20px 20px 40px 20px; border: 1px solid #79b85e; max-width: 1090px;">
<h1>Actualizar Dados do IAM Provincial</h1>
         <div class="mb40" style="display: block;"></div>               
              <form method="post" action="{{ url('/iam/'.$ent->id)}}">
   
                            {{ method_field('PUT') }}
                            {{ csrf_field() }}

                        <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Nome da Etidade</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="text" value="{{$users->name}}" id="nome" name="name" class="form-control input-sm" placeholder="Nome do Iam Provincial">
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
                                            <input type="text" name="telefone" value="{{$ent->telefone}}" class="form-control input-sm" placeholder="Telefone">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="form-example-int form-horizental mg-t-15">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Província</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input disabled type="text" name="provincia" value="{{$users->provincia}}" class="form-control input-sm" placeholder="Província">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int form-horizental mg-t-15">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Localidade</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="text" value="{{$ent->endereco}}" name="endereco" class="form-control input-sm" placeholder="Endereco">
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


                            <button type="submit"  class="button-alt grayb"> Atualizar</button>



                            <button href="#" value="save" class="button-alt grayb">&laquo; Voltar</button>
                                </div>
                            </div>
                        </div>
                        </form>


        </div>
    </div>

@endsection 

