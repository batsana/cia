@extends('layouts.index')
{{-- @extends('master') --}}
@section('content')
  <div class="breadcomb-area">
    <div class="container branco" style="border: 1px solid #79b85e; max-width: 1090px;">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="breadcomb-list">
            <h1>Lista de Todas as Fábricas</h1>

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


               <a href="/apagarfabrica/{{ $fab->id }}" ><button  class="button-alt">X</button></a>
             </td>

              </tr>
                @endforeach
         
           </tbody>
        </table>
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
            $('#message').append('Dados Gravados com Sucesso.').addClass('alert-success').show();
             setTimeout(function(){
                $('#message').fadeOut(7000);
               });

        } else if (valorGood == 'bad') {
             $('#message').append('Não foi possível Editar os Dados.').addClass('alert-danger').show();

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

