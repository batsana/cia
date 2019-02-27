{{-- @extends('master') --}}
@extends('layouts.index')
@section('content')


<div class="breadcomb-area">
    <div class="container branco" style="border: 1px solid #79b85e; max-width: 1090px;">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="breadcomb-list">
             
        <div class="form-element-list" id="id_bre">            
             <h1 style="margin-top:-10px;">Geracão de Certificados de Origem e Classificação</h1> 
         
           
              <form class="form-horizontal bre"  method="post" action="{{ url('/salvacertclass') }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="ff" id="ff" value="{{ @$resultado }}">
                         @if (session('resultado'))
                    <div class="alert alert-success" id="message">
                  {{ session('resultado') }}
                     </div>
                  @endif

       </div>
    
    <div class="row">
    
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
                {{-- <i class="notika-icon notika-phone"></i> --}}
            </div>
            <div class="nk-int-st">
              <input type="text" class="form-control" name="quantfardo" placeholder="Quantidadede de Fardos" value="{{ old('quantfardo') }}" required autofocus>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
            {{-- <i class="notika-icon notika-support"></i> --}}
             </div>
            <div class="nk-int-st">
              <input type="text" name="quantestenso"  class="form-control" placeholder="Quantidadede por Extenso" value="{{ old('quantestenso') }}">                 
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
                {{-- <i class="notika-icon notika-mail"></i> --}}
            </div>
            <div class="nk-int-st">

                <input type="text" name="marcafardo"  class="form-control" placeholder="Marca do Fardo" value="{{ old('marcafardo') }}"> 
            </div>
        </div>
    </div>

</div>




<div class="row">
   

    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
                {{-- <i class="notika-icon notika-mail"></i> --}}
            </div>
            <div class="nk-int-st">
              <input type="text" class="form-control" name="navio" placeholder="Navio" value="{{ old('navio') }}" required autofocus>
            </div>
        </div>
    </div>


    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
                {{-- <i class="notika-icon notika-phone"></i> --}}
            </div>
            <div class="nk-int-st">
               <input type="text" class="form-control" name="destino" placeholder="Destino" value="{{ old('distino') }}" required autofocus>
            </div>
        </div>
    </div>

     <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
                {{-- <i class="notika-icon notika-mail"></i> --}}
            </div>
            <div class="nk-int-st">
               <input  type="text" class="form-control" placeholder="Peso Bruto" name="pesobruto">
                 


            </div>
        </div>
      </div>
</div>

<div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
            {{-- <i class="notika-icon notika-support"></i> --}}
             </div>
            <div class="nk-int-st">
                 <input type="text" class="form-control" name="pesoliq" placeholder="Peso Líquido" value="{{ old('pesoliq') }}">          
            </div>
        </div>
    </div>
   {{--  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
            <i class="notika-icon notika-support"></i>
             </div>
            <div class="nk-int-st">
                 
                 <input type="text" class="form-control" name="classif_id" placeholder="Classificacao" value="{{ old('classif_id') }}">  --}}
{{--             </div>
        </div>
</div>  --}}
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
            {{-- <i class="notika-icon notika-support"></i> --}}
             </div>
            <div class="nk-int-st">
              {{--    <input  type="text" class="form-control" placeholder="Esquema" name="esquema_id"> --}}
              <select class="form-control" name="esquema_id">
                 <option value="#">Nr. do Esquema</option>
                 @foreach($esquemas as $es)
                  <option value="{{$es->id}}">{{$es->id}}</option>
                 @endforeach
             </select>
         
            </div>
        </div>
    </div>
    </div>
   

    <div class="row">
       <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
          {{--   <i class="notika-icon notika-support"></i> --}}
             </div>
            <div class="nk-int-st">
               
              <button type="submit"  class="button-alt grayb" >Enviar</button>
            </div>
        </div>
    </div>
    </div>

    </div>

                </form>
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

       
              setTimeout(function(){
                $('#message').fadeOut(7000);
               });

        
    });
</script>
@endsection
