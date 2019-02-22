@extends('layouts.index')
@section('content')
 <div class="row">
     <div class="col-md-10">
       <div class="container" style="height: 300px">
          <div class="wrapper wrapper-content animated fadeInRight">
            <div class="form_Registar">
            <div class="panel panel-primary" style="margin-top: -30px">
                <div class="panel-heading">
                    <h4><i class="fa fa-user fa-2x"></i>&nbsp; Enviar Amostra</h4>
                </div>
            </div>  
            <br>
            <div class="acomodar"> 
                @if(session('success'))
                <p class="alert-success">
                   {{session('success')}} 
                </p>
                @endif
              <form action="{{url('/salvarClassificacao')}}" method="post">
                     {{ csrf_field() }}
               
                    <div class="col-md-12 form-group  has-feedback{{ $errors->has('name') ? ' has-error' : '' }}">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        <input id="numerofardo" type="text" class="form-control" name="numerofardo" placeholder="Numero do fardo" value="{{ old('numerofardo') }}" required autofocus>

                        @if ($errors->has('numerofardo'))
                            <span class="help-block"><strong>{{ $errors->first('numerofardo') }}</strong></span>
                        @endif
                    </div>

                   
                     <div class="form-group col-md-12 has-feedback">
                        <span class="glyphicon glyphicon-record form-control-feedback"></span>
                        <input id="tipo" type="text" class="form-control" name="tipo" placeholder="Tipo de Fardo" value="{{ old('tipo') }}" required autofocus>
                    </div>

                    <div class="form-group col-md-12 has-feedback">
                        <input id="comprimento" type="text" class="form-control" name="comprimento" placeholder="Comprimento" value="{{ old('comprimento') }}" required autofocus>
                    </div>
       
                    <div class="form-group col-md-12">
                        <br>
                        <div class="row">
                            <div class="col-md-6 ">
                                <button type="submit" class="btn btn-block">Registar</button>
                            </div>
                            <div class="col-md-6 background">
                                <a class="btn btn-block" href="{{ url('/') }}" style="background-color: #e1bee7">Cancelar</a>
                            </div>
                        </div>
                    </div>
                  {{-- <input type="hidden" name="fabrica_id" value="{!!$fabrica_id !!}"> --}}
               
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-6">
          <a href="{{url('/registar/etiqueta')}}"> Requisicao de Etiquetas</a>
    </div>
</div>
@endsection

