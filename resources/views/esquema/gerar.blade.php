@extends('layouts.index')
@section('content')
 <div class="row">
     <div class="form-element-area">
       <div class="container">
   
  {{--   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> --}}
        <div class="form-element-list">            
            
            
              <form class="form-horizontal"  method="get" action="{{ url('/salvaesquema') }}">
                    {{ csrf_field() }}

  <input type="hidden" name="estado"  value="homologado">
  <input type="hidden" name="fabrica_id" value="{!!$fabrica_id !!}">

 
    
    <div class="row">
    
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
                <i class="notika-icon notika-phone"></i>
            </div>
            <div class="nk-int-st">
              <input type="text" class="form-control" name="nrlista" placeholder="Numero da lista" value="{{ old('nrlista') }}">
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
            <i class="notika-icon notika-support"></i>
             </div>
            <div class="nk-int-st">
              <input type="text" name="tipo"  class="form-control" placeholder="Tipo" value="{{ old('tipo') }}">                 
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
               {{--  <i class="notika-icon notika-mail"></i> --}}
            </div>
            <div class="nk-int-st">
               <input type="text" name="comprimentofibra" class="form-control" placeholder="Comprimento da Fibra" value="{{ old('comprimentofibra') }}">
            </div>
        </div>
    </div>

</div>




<div class="row">
   

    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
                <i class="notika-icon notika-mail"></i>
            </div>
            <div class="nk-int-st">
              <input type="text" class="form-control" name="quantfardo" placeholder="Quantidade de Fardos" value="{{ old('quantfardo') }}">
            </div>
        </div>
    </div>


    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
                <i class="notika-icon notika-phone"></i>
            </div>
            <div class="nk-int-st">
               <input type="text" class="form-control" name="pesobruto" placeholder="Peso Bruto" value="{{ old('pesobruto') }}">
            </div>
        </div>
    </div>

     <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
                <i class="notika-icon notika-mail"></i>
            </div>
            <div class="nk-int-st">
               <input  type="text" class="form-control" placeholder="Lote dos fardos" name="lote">
                 
            </div>
        </div>
      </div>
</div>

<div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
            <i class="notika-icon notika-support"></i>
             </div>
            <div class="nk-int-st">
                 <input type="text" class="form-control" name="pesoliq" placeholder="Peso Liquido" value="{{ old('pesoliq') }}">          
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
            <i class="notika-icon notika-support"></i>
             </div>
            <div class="nk-int-st">
                  <select  id="contrato_id" class="form-control"  name="contrato_id"> 
                            <option value="#">Numero do Contrato</option>
                            @foreach($contratos as $c)
                              <option value="{{$c->id}}">{{$c->nrcontrato}}</option>
                            @endforeach
                        </select>
          
            </div>
        </div>
</div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
            <i class="notika-icon notika-support"></i>
             </div>
            <div class="nk-int-st">
                 <input  type="text" class="form-control" placeholder="Numero de certf." name="nrcertific">
         
            </div>
        </div>
    </div>
    </div>


    <div class="row">

      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
                {{-- <i class="notika-icon notika-mail"></i> --}}
            </div>
            <div class="nk-int-st">
{{-- 
                   <input id="name" type="textArea" class="form-control" name="nrocorespond" placeholder="Numero de identificacao" value="{{ old('nrocorespond') }}">  --}}
                   <textarea name="nrocorespond" class="form-control" rows="5" id="selectClasse" list="listCodigobar"></textarea>

                    <input id="classificacao_id" name="classificacao_id" type="hidden" value="">
                   
            </div>
        </div>
      </div>

    </div>

{{-- /////////////////////////////////////////////////////////////////////////////// --}}
    <div class="row">
       <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
          {{--   <i class="notika-icon notika-support"></i> --}}
             </div>
            <div class="nk-int-st">
               
              <button type="submit" style="width: 50%;" class="btn btn-primary waves-effect" >Enviar</button>
            </div>
        </div>
    </div>
    </div>


             
   
                </form>
            </div>
        </div>
        </div>
    </div>

@endsection



