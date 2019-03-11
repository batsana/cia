@extends('layouts.index')
@section('content')
 <div class="breadcomb-area">
        <div class="container branco" style="border: 1px solid #79b85e; max-width: 1090px;">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcomb-list">          
            <div class="alert" id="message" style="display: none; margin-bottom: 20px">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button>
            </div>
              <h1>Registo de Entidades</h1>
              <div class="mb40" style="display: block;"></div>
              <form  class="form-horizontal" role="form" method="POST" action="{{ url('/salvamos') }}">
                    {{ csrf_field() }}
                         @if (session('resultado'))
                         <div class="alert alert-danger" id="me">
                        {{ session('resultado') }}
                       </div>
                        @endif
  <input type="hidden" name="tipoRegisto" id="tipoRegisto" value="entidade">
<input type="hidden" name="ff" id="ff" value="{{ @$resultado }}">
    <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
            
             </div>
            <div class="nk-int-st">
                 <select  id="tipoEntidade" class="form-control" name="tipoEntidade"> 
                           
                           <option value="laboratorio">Laboratório</option>
                           <option value="grafica" >Gráfica</option>
                           <option value="companhia" >Algodoeira</option>
                           <option value="fabrica" >Fábrica</option>
                        </select>                  
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
               {{--  <i class="notika-icon notika-mail"></i> --}}
            </div>
            <div class="nk-int-st">
               <select name="companhia_id"  id="selectCompanhia" class="form-control hidden" name="tipoEntidade"> 
                            @foreach($companhia as $c)
                                <option value="{{$c->id}}">{{$c->name}}</option>
                            @endforeach
                        </select>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
                {{-- <i class="notika-icon notika-phone"></i> --}}
            </div>
            <div class="nk-int-st">
              <input id="matriz" type="text" class="form-control hidden" name="matrizfilial" placeholder="Matriz/Filial" value="{{ old('matrizfilial') }}">
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
                 <input id="name" type="text" class="form-control" name="name" placeholder="Nome" value="{{ old('name') }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="help-block"><strong>{{ $errors->first('name') }}</strong></span>
                        @endif 
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
                {{-- <i class="notika-icon notika-mail"></i> --}}
            </div>
            <div class="nk-int-st">
              <input id="endereco" type="text" class="form-control" name="endereco" placeholder="Endereço" value="{{ old('endereco') }}" required autofocus>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
                {{-- <i class="notika-icon notika-phone"></i> --}}
            </div>
            <div class="nk-int-st">
               <input id="telefone" type="text" class="form-control" name="telefone" placeholder="Telefone" value="{{ old('telefone') }}" required autofocus>
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
                 <input id="numerunico" type="text" class="form-control" name="numerunico" placeholder="Prefixo GS1" value="{{ old('numerunico') }}" required autofocus>
                {{--   <input id="numerunico" type="text" class="form-control" name="numerunico" placeholder="Prefixo GS1" value="{{ old('numerunico') }}" required autofocus>   --}}        
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
           
             </div>
            <div class="nk-int-st">
                 <input id="password" type="password" class="form-control" placeholder="Senha" name="password" required>
                @if ($errors->has('password'))
                <span class="help-block"> <strong>{{ $errors->first('password') }}</strong> </span>
                @endif          
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
            
             </div>
            <div class="nk-int-st">
                 <input id="password-confirm" type="password" class="form-control" placeholder="Confirmar Senha" name="password_confirmation" required>          
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
                  <input id="email" type="text" class="form-control" placeholder="E-Mail (Deve ser ÚNICO)" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="help-block"> <strong>{{ $errors->first('email') }}</strong> </span>
                        @endif          
            </div>
        </div>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
            
             </div>
            <div class="nk-int-st">
                  <input id="conse_id" type="text" class="form-control hidden" placeholder="Concelho ou Circunscrição" name="conse">     
            </div>
        </div>
</div>
</div>
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
           
             </div>
            <div class="nk-int-st">
                <button type="submit" class="button-alt grayb">Registar</button>

                 <a  class="button-alt grayb" href="{{ url('/home') }}">Cancelar</a> 
                       
            </div>
        </div>
    </div> 
     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
         
             </div>
            <div class="nk-int-st">
                
               {{--  <a class="btn btn-warning notika-btn-warning" href="{{ url('/home') }}" style="background-color: #e1bee7; width: 50%;">Cancelar</a>  --}}         
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
    // busca do valor da selecao
    $(document).ready(function(){
 setTimeout(function(){
           $('#me').fadeOut(7000);
         });
    	
        $('#tipoEntidade').on('change', function(){  
            valor = $(this).val();

            if(valor=='fabrica'){
                $('#selectCompanhia').removeClass('hidden');
                $('#matriz').removeClass('hidden');
                $('#conse_id').removeClass('hidden');
                
                $('#tipoRegisto').val('fabrica');
                // se for igua a fabrica o valor da selecao o registo sera da faribrica caso nao que seja igual a entidade
            }else{
                $('#selectCompanhia').addClass('hidden');
                $('#matriz').addClass('hidden');
                $('#conse_id').addClass('hidden');
                $('#tipoRegisto').val('entidade');
            }

        });

         valorGood = $('#ff').val();

        if (valorGood == 'good') {
            $('#message').append('Dados Gravados com Sucesso.').addClass('alert-success').show();
              setTimeout(function(){
                $('#message').fadeOut(7000);
               });

        } else if (valorGood == 'bad') {
             $('#message').append('Não foi possível Introduzir os Dados.').addClass('alert-danger').show();

               setTimeout(function(){
                $('#message').fadeOut(4000);
               });
        }
     
            document.getElementById("form-horizontal").onsubmit = function(){
          location.reload(true);
       } 

       
    });
</script>
@endsection

