
@extends('master')
@section('content')

  <div class="breadcomb-area">
    <div class="container branco" style="border: 1px solid #79b85e; max-width: 1090px;">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="breadcomb-list">
            <h1>Lista de Funcinários</h1>
               @if (session('resultado'))
              <div class="alert alert-success" id="message">
              {{ session('resultado') }}
               </div>
             @endif
    <div class="alert alert-danger alert-dismissible id_erro" role="alert" id="id_sucesso_vazio" style="display: none;">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> <strong> Não existem funcionarios resistados no sistema.</strong>
        </div>
     <div class="table-responsive">

                 <form>
                 
<input type="hidden" name="ff" id="ff" value="{{ @$resultado }}">
</form>
                  <table class="table table-sc-ex" id="lista">
                
              <thead>
                    <tr>
                    <th>Entidade</th>
                    <th>Nome</th>
                    
                    <th>Ocupação</th>
                  
                    
                     <th>Opções</th>
                      </tr>
              </thead>
                <tbody>
                @foreach($funcionarios as $func)
              
                <td>{{$func->name}}</td>
                 <td>{{$func->nome}}</td>
              
                 <td>{{$func->desiganacao}}</td>
               <td>
                <a href=" /editarfuncio/{{ $func->id }}" class="button-alt grayb">Editar</a>
               <a href="/apagafuncio/{{ $func->id }}" ><button  class="button-alt">X</button></a>
              </tr>
                @endforeach
         
           </tbody>
        </table>
          <h5 class="text-center">{{$funcionarios->links() }}</h5>
      </div></div>
      </div>
    </div>
  </div>
    </div>  
    </div>
  </div>
@endsection 


@section('script')

  
    <script  type="text/javascript">

      $(document).ready(function(){

      	setTimeout(function(){
                $('#message').fadeOut(7000);
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
     
         var roCount = $('#lista > tbody > tr').length;
       //alert(roCount);
       if (roCount == 0) {
          $('#id_sucesso_vazio').show();
          $('#lista').hide();
       }

       

      });   
    </script>
@endsection
