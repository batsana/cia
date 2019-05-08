@extends('layouts.index')
{{-- @extends('master') --}}
@section('content')

  <div class="breadcomb-area">
    <div class="container branco" style="border: 1px solid #79b85e; max-width: 1090px;">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="breadcomb-list">
            <h1>Lista de Algodoeiras</h1>
             @if($algo->count() > 0)
            @if (session('resultado'))
              <div class="alert alert-success" id="messages">
              {{ session('resultado') }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button>
               </div>
             @endif

              @if (session('resultadoss'))
              <div class="alert alert-success" id="messages">
              {{ session('resultadoss') }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button>
               </div>
             @endif
    <form>
                 
<input type="hidden" name="ff" id="ff" value="{{ @$resultado }}">
</form>
            <div class="alert" id="message" style="display: none; margin-bottom: 20px">
  

              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button>
            </div>



             
              <div class="table-responsive">
                   <table class="table table-sc-ex">
              <thead>
                    <tr>
                    <th>Nome da Algodoeira</th>
                    <th>Prefixo da Algodoeira</th>
                   
                    <th>Telefone</th>
                    <th>Endereço</th>
                    
                     <th>Opções</th>
                      </tr>
              </thead>
                <tbody>
                @foreach($algo as $ent)
                  <td>{{$ent->name}}</td>
               
                 <td>{{$ent->numerunico}}</td>
            
                 <td>{{$ent->telefone}}</td> 
                <td>{{$ent->endereco}}</td>        
    

                <td><a href="{{ '/sua/'.$ent->id.'/su' }}" class="button-alt grayb">Listar Fábricas</a>



             
                  <a href="{{ url('/atual/'.$ent->id.'/editado')}}"><button class="button-alt grayb">Editar</button></a>

                    

               <a href="/apagarCompanhia/{{$ent->id}}" class="button-alt">X</a>
               
             </td>

              </tr>
                @endforeach
         
           </tbody>
        </table>
        <h5 class="text-center">{{ $algo->links() }}</h5>
      </div>
       @else

                   <div class="alert alert-danger alert-dismissible id_sucesso" role="alert" id="id_sucesso" style="display: block; margin-top: 30px;">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> <strong style="align-content: center;"><h5> Não foi encontrado nenhum registo na base de dados!</h5></strong></div>
                @endif
      <div class="row"> 
     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
       
            
              <div style="border-top: 1px solid #df822a; margin-top: 24px; padding-top: 10px;">
      <a  class="button-alt" style="float: right; color: #fff;" href="{{ url('/gestao/entidade') }}">&laquo; Voltar</a>        
           
        </div>
    </div>
    </div>
      </div>
    </div>
  </div>
    </div>  
    </div>
  </div>

@endsection
@section('scripts')
    <script>
        $(document).ready(function() {

        	// setTimeout(function(){
         //        $('#messages').fadeOut(7000);
         //       });

        valorGood = $('#ff').val();

        if (valorGood == 'good') {
            $('#message').append('Dados Atualizados com Sucesso.').addClass('alert-success').show();
             // setTimeout(function(){
             //    $('#message').fadeOut(7000);
             //   });

        } else if (valorGood == 'bad') {
             $('#message').append('Não foi possível Editar os Dados.').addClass('alert-danger').show();

              // setTimeout(function(){
              //   $('#message').fadeOut(4000);
              //  });
        }
     
            document.getElementById("form-horizontal").onsubmit = function(){
          location.reload(true);
       } 
        });
    </script>
@endsection
