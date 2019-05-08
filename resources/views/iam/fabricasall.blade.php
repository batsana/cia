@extends('layouts.index')
{{-- @extends('master') --}}
@section('content')
  <div class="breadcomb-area">
    <div class="container branco" style="border: 1px solid #79b85e; max-width: 1090px;">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="breadcomb-list">
             @if (session('resultado'))
                    <div class="alert alert-success" id="message">
                  {{ session('resultado') }}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button>
                     </div>
                  @endif
            <h1>Lista de Todas as Fábricas</h1>
       @if($fabricas->count() > 0)
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
                    <th>Nome da Fábrica</th>
                    <th>Prefixo da Algododeira</th>
                    <th>Matriz/Filial</th>
                    <th>Telefone</th>
                    <th>Endereço</th>
                     <th>Nome da Algodoeira</th>
                     <th>Opções</th>
                      </tr>
              </thead>
                <tbody>
                @foreach($fabricas as $fab)
              
                <td>{{$fab->nome}}</td>
                 <td>{{$fab->numerunico}}</td>
                 <td>{{$fab->matrizfilial}}</td>

                 <td>{{$fab->telefone}}</td>
                <td>{{$fab->endereco}}</td> 
                <td>{{$fab->name}}</td>

               
               

                <td> <a href="{{ url('/editarall/'.$fab->id.'/editall')}}" class="button-alt grayb">Editar</a>


               <a href="/apagarfabricas/{{ $fab->id }}" ><button  class="button-alt">X</button></a>
              
             </td>

              </tr>
                @endforeach
         
           </tbody>
        </table>
         <h5 class="text-center">{{ $fabricas->links() }}</h5>
      </div>
       @else

                   <div class="alert alert-danger alert-dismissible id_sucesso" role="alert" id="id_sucesso" style="display: block; margin-top: 30px;">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> <strong style="align-content: center;"><h5> Não foi encontrado nenhum registo nesta categoria!</h5></strong></div>
                @endif
      <div class="row">
       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
       
            
              <div style="border-top: 1px solid #df822a; margin-top: 24px; padding-top: 10px;">
      <a  class="button-alt" style="float: right; color: #fff; margin-bottom: 15px;" href="{{ url('/gestao/entidade') }}">&laquo; Voltar</a>          
           
        </div>
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

