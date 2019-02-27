@extends('master')
@section('content')


<div class="breadcomb-area">
    <div class="container branco" style="border: 1px solid #79b85e; max-width: 1090px;">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="breadcomb-list">
       
  {{--   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> --}}
        <div class="form-element-list" id="id_calm">
            <form  class="calm" method="post">
                     {{ csrf_field() }}




    <h1>Envio de Amostras</h1>  


      <div class="alert alert-success alert-dismissible id_sucesso" role="alert" id="id_sucesso" style="display: none;">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> <strong> Amostras enviadas  com sucesso!</strong>
   </div>
   <div class="alert alert-danger alert-dismissible id_erro" role="alert" id="id_erro" style="display: none;" >
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> <strong> Problemas no Envio de Amostras!</strong>
   </div> 
    
    <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
            {{-- <i class="notika-icon notika-support"></i> --}}
             </div>
          {{--   <div class="nk-int-st">
                 <input id="numerofardo" type="text" class="form-control" name="numerofardo" placeholder="Numero do fardo" value="{{ old('numerofardo') }}" required autofocus>

                        @if ($errors->has('numerofardo'))
                            <span class="help-block"><strong>{{ $errors->first('numerofardo') }}</strong></span>
                        @endif                     
            </div>
 --}}              <div class="nk-int-st">
               <input type="text" class="form-control" name="barcod" placeholder="Código de Barras" value="{{ old('barcod') }}" required autofocus>
        </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
                {{-- <i class="notika-icon notika-mail"></i> --}}
            </div>
            <div class="nk-int-st">
               <input id="grau" type="text" class="form-control" name="grau" placeholder="Grau" value="{{ old('grau') }}" required autofocus>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
                {{-- <i class="notika-icon notika-phone"></i> --}}
            </div>
            <div class="nk-int-st">
                <label>Campanha</label>
             
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
                 <input id="pesolik" type="text" class="form-control" name="pesolik" placeholder="Peso Líquido (Kg)" value="{{ old('pesolik') }}" required autofocus>                    
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
                {{-- <i class="notika-icon notika-mail"></i> --}}
            </div>
            <div class="nk-int-st">
               <input id="pesobru" type="text" class="form-control" name="pesobru" placeholder="Peso Bruto (Kg)" value="{{ old('pesobru') }}" required autofocus>
            </div>
        </div>
    </div>

   

     <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
           
            </div>
            <div class="nk-int-st">
          <input id="sacha" type="date" class="form-control" name="sacha" placeholder="safra" value="{{ old('comprimento') }}" required autofocus> 
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
                       <select  id="entidade_id" class="form-control"  name="entidade_id"> 
                            <option value="#">Entidade</option>
                            @foreach($entidade as $c)
                              <option value="{{$c->id}}">{{$c->name}}</option>
                            @endforeach
                        </select>     
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
                {{-- <i class="notika-icon notika-mail"></i> --}}
            </div>
           <div class="nk-int-st">
              <input id="lote" type="text" class="form-control" name="lote" placeholder="Número de Lote" value="{{ old('lote') }}" required autofocus>
            </div>
    </div>
  </div>
  
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
           
            </div>
            <div class="nk-int-st">
          <input id="sacha" type="date" class="form-control" name="sacha1" placeholder="Campanha" value="{{ old('comprimento') }}" required autofocus> 
            </div>
        </div>
    </div>
</div>
<div class="row">
   <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
           
            </div>
            <div class="nk-int-st">
          <input id="lista" type="text" class="form-control" name="lista" placeholder="Número de Lista" value="{{ old('comprimento') }}"> 
            </div>
        </div>
    </div>
</div>


<div class="row">
  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
           
            </div>
            <div class="nk-int-st">
          <button type="submit" class="button-alt grayb">Enviar</button>  
            </div>
        </div>
    </div>
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
</div>
    </div>
 
</div>
@endsection
@section('script')
<script type="text/javascript">
    $(document).ready(function(){
   

      $('#id_calm').on('submit','.calm',function(e){
           e.preventDefault();
           form = $(this);
           $.ajax({
          url: "{{ url('/salvarClassificacao') }}",
            type:'post',
            dataType:'json',
            data:form.serialize(),
            success:function(result){
              if (result.is_valid){

               $('#id_sucesso').show();
               setTimeout(function(){
                $('.id_sucesso').fadeOut(5000);
               });
                 $(".calm")[0].reset();
              }
           
            },

             error:function(result){
     // console.log(result);
     // return;


               $('#id_erro').show();
               setTimeout(function(){
                $('.id_erro').fadeOut(4000);
               });
            }
        
           });

      });
    });
</script>
@endsection



