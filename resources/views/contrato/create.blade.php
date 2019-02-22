@extends('layouts.index')
@section('content')
 <div class="breadcomb-area">
        <div class="container branco" style="border: 1px solid #79b85e; max-width: 1090px;">
            <div class="row">
                {{-- <div class="col-lg-12 col-md-12 co --}}
  <div class="alert alert-success alert-dismissible id_sucesso" role="alert" id="id_sucesso" style="display: none;">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> <strong> Contrato Gerado com Sucesso!</strong>
   </div>
   <div class="alert alert-danger alert-dismissible id_erro" role="alert" id="id_erro" style="display: none;" >
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> <strong> Problemas na Geração do Contrato </strong>
   </div> 
<div class="form-element-list" id="id_bero">  
   <form class="form-horizontal bero">
                         

                    {{ csrf_field() }}

                    <input type="hidden" name="tipoEntidade" value="cliente">
                    {{-- <input type="hidden" name="tipoEntidade" value="$fabricas"> --}}
                    {{-- <input type="text" name="entidade_id"  value="{{ $fabricas }}"> --}}
                    <input type="hidden" name="entidade_id" value="{!!$entidades !!}">

   <input type="hidden" name="estado"  value="Pendente">
<h1>Introdução de Dados de Contrato</h1>
    
    <div class="row">
    
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
          
            </div>
            <div class="nk-int-st">
              <input type="text" class="form-control" name="consignatario" placeholder="Consignatário" value="{{ old('consignatario') }}" required autofocus>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
        
             </div>
            <div class="nk-int-st">
              <input type="text" name="destino"  class="form-control" placeholder="Destino" value="{{ old('destino') }}" required autofocus>                 
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
               {{--  <i class="notika-icon notika-mail"></i> --}}
            </div>
            <div class="nk-int-st">
               <input type="text" name="marcafardo" class="form-control" placeholder="Marca do Fardo" value="{{ old('marcafardo') }}" required autofocus>
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
                 <input id="name" type="text" class="form-control" name="portoembarq" placeholder="Porto de Embarque" value="{{ old('portoembarq') }}">

            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
              
            </div>
            <div class="nk-int-st">
              <input type="text" class="form-control" name="campanha" placeholder="Campanha" value="{{ old('campanha') }}">
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
       {{--          <i class="notika-icon notika-phone"></i> --}}
            </div>
            <div class="nk-int-st">
               <input type="text" class="form-control" name="nrcontrato" placeholder="Número do Contrato" value="{{ old('nrcontrato') }}">
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
                     <input type="text" class="form-control" placeholder="Preço p/ Tipo Extra" name="tipoextra" value="{{ old('quantfibra') }}"> 
          
            </div>
        </div>
  </div>
  {{-- /////////////////////// --}}
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
         
             </div>
            <div class="nk-int-st">
               <input type="text" class="form-control" placeholder="Preço p/ Tipo III" name="tipotres_id" value="{{ old('quantfibra') }}">
          
            </div>
        </div>
  </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
            
             </div>
            <div class="nk-int-st">
                 
             <input type="text" class="form-control" placeholder="Quantidade" name="quantfibra" value="{{ old('quantfibra') }}">
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
                  <input type="text" class="form-control" placeholder="Preço p/ Tipo I" name="tipoum_id" value="{{ old('quantfibra') }}">
                   
          
            </div>
        </div>
  </div>
  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
      
             </div>
            <div class="nk-int-st">

                  <input type="text" class="form-control" placeholder="Preço p/ Tipo IV" name="tipquatro_id" value="{{ old('quantfibra') }}">
          
            </div>
        </div>
  </div>
{{--      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding-bottom: 0px;">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
         
             </div>
            <div class="nk-int-st">
                 
                    <label>
                    Período de Vigência
                  </label>
            </div>
        </div>
  </div> --}}
   <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
         
             </div>
            <div class="nk-int-st">
              <label>
                    Período de Vigência
                  </label>
                 <input type="date" class="form-control" name=" comPeriudo" placeholder="Início de Período de Vigência" value="{{ old('comPeriudo') }}">          
            </div>
        </div>
    </div>
</div>
<div class="row">
  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mt-20">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
      
             </div>
            <div class="nk-int-st">
                  
          <input type="text" class="form-control" placeholder="Preço p/ Tipo II" name="tipdois_id" value="{{ old('quantfibra') }}">
            </div>
        </div>
  </div>
  
    
   <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mt-20">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
            {{-- <i class="notika-icon notika-support"></i> --}}
             </div>
            <div class="nk-int-st">
                 <input id="password" type="password" class="form-control" placeholder="Senha" name="password" required>
                @if ($errors->has('password'))
                <span class="help-block"> <strong>{{ $errors->first('password') }}</strong> </span>
                @endif           
            </div>
        </div>
    </div>

  {{-- //////////////////////// --}}
   <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
         {{--    <i class="notika-icon notika-support"></i> --}}
             </div>
            <div class="nk-int-st">
                  <input type="date" class="form-control" placeholder="Fim do Período de Vigência" name="fimPeriudo" value="{{ old('fimPeriudo') }}">
          
            </div>
        </div>
  </div>
</div>

<div class="row">
   <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mt-20">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
      
             </div>
            <div class="nk-int-st">

                   <input id="email" type="text" class="form-control" placeholder="E-Mail" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="help-block"> <strong>{{ $errors->first('email') }}</strong> </span>
                        @endif
          
            </div>
        </div>
  </div>

   
 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mt-20">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
            {{-- <i class="notika-icon notika-support"></i> --}}
             </div>
            <div class="nk-int-st">
               
                  <input id="password-confirm" type="password" class="form-control" placeholder="Confirmar Senha" name="password_confirmation" required>      
            </div>
        </div>
    </div> 
   
    
    {{-- //////////////////////////////////// --}}
  </div>

  <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
            {{-- <i class="notika-icon notika-support"></i> --}}
             </div>
            <div class="nk-int-st">
                <select  id="contrato_id" class="form-control"  name="contrato_id"> 
                            <option value="0">Seleccionar Clientes Existentes</option>
                            @foreach($users as $c)
                              <option value="{{$c->id}}">{{$c->consignatario}}</option>
                            @endforeach
                        </select>           
                   </div>
                       
            </div>
        </div>
    
        
    </div>
  </div>
  <div class="row">
     <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mt-20">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
            {{-- <i class="notika-icon notika-support"></i> --}}
             </div>
            <div class="nk-int-st">
                <button type="submit" class="button-alt grayb">Registar</button>

                 <a class="button-alt grayb" href="{{ url('/home') }}" >&laquo; Voltar</a> 
                       
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
@section('scripts')
<script type="text/javascript">
    $(document).ready(function(){




      $('#contrato_id').change(function(){  
        // passVal = $('#password').val();



                if ($('#contrato_id').val() > 0 ) {
                  

                    $('#password').css('visibility', 'hidden');
                     $('#password-confirm').hide();
                      $('#email').hide();
               
              } else {
                    $('#password').css('visibility', 'visible');
                     $('#password-confirm').show();
                      $('#email').show();
              }
             
            
            });

        
   

      $('#id_bero').on('submit','.bero',function(e){
           e.preventDefault();
           form = $(this);
           $.ajax({
          url: "{{ url('/salvacontra') }}",
            type:'post',
            dataType:'json',
            data:form.serialize(),
            success:function(result){
              if (result.is_valid){

               $('#id_sucesso').show();
               setTimeout(function(){
                $('.id_sucesso').fadeOut(7000);
               });
                
              }
              
            $(".bee")[0].reset();
            },

             error:function(result){
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
