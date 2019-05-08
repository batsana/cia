@extends('layouts.index')
@section('content')


<div class="breadcomb-area">
    <div class="container branco" style="border: 1px solid #79b85e; max-width: 1090px;">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="breadcomb-list">
       
  {{--   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> --}}
        <div class="form-element-list" id="id_ber">
          <form action="{{url('/salvarEtiqueta')}}" method="post" class="ber">
                     {{ csrf_field() }} 

     <input type="hidden" name="ff" id="ff" value="{{ @$resultado }}">                
     {{-- <input type="text" name="fab" value="{{ $us }}">                 --}}

  
         <h1>Requisição de Etiquetas</h1>            
           @if (session('resultado'))
    <div class="alert alert-success" id="message">
        {{ session('resultado') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button>
    </div>
@endif
         <div class="row">
 <div style="padding: 0 0 20px 40px;"> Último número de série requisitado: <strong>{{$ultmo}}</strong></div>
  
</div>
  
    <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
           
             </div>
            <div class="nk-int-st">
                  <select required autofocus id="tipoet" class="form-control" name="tipoet"> 
                           <option value="">Tipo de Etiqueta</option>
                           <option value="BOPP">BOPP</option>
                           {{-- <option value="POLETILENO">POLETILENO</option> --}}
                        </select>                     
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
            </div>
            <div class="nk-int-st">
               <input id="quantidade" type="text" class="form-control" name="inetervalo" placeholder="Quantidade" value="{{ old('quantidade') }}" required autofocus>
            </div>
        </div>
    </div>

   
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
             </div>
            <div class="nk-int-st">
                 <select required autofocus id="entidade_id" class="form-control"  name="entidade_id"> 
                            <option value="">Seleccionar Gráfica</option>
                            @foreach($entidade as $c)
                              <option value="{{$c->id}}">{{$c->name}}</option>
                            @endforeach
                        </select>                  
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
             </div>
            <div class="nk-int-st">
                 <button type="submit" class="button-alt grayb" >Enviar</button>          
            </div>
        </div>
    </div>

                  <input type="hidden" name="fabrica_id" value="{!!$fabrica_id !!}">
                </form>
            </div>

            

        </div>
        </div>
    </div>
</div>

<div class="row" style="padding: 0 20px 0 20px">
  <div class="alert alert-warning"><strong>Atenção:</strong> Esta operação poderá durar algum tempo caso o número de série atinja 5000.</div>
</div>
 <div class="row">
       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
       
            
              <div style="border-top: 1px solid #df822a; margin-top: 24px; padding-top: 10px;">
      <a  class="button-alt" style="float: right; color: #fff; margin-bottom: 15px;" href="{{ url('/home') }}">&laquo; Voltar</a>          
           
        </div>
    </div>
    </div>

</div>

    </div>
 
</div>
@endsection
@section('scripts')
<script type="text/javascript">
    $(document).ready(function(){

       
              // setTimeout(function(){
              //   $('#message').fadeOut(7000);
              //  });

        
    });
</script>
@endsection



