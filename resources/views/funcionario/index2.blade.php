
@extends('master')
@section('content')

  <div class="breadcomb-area">
    <div class="container branco" style="border: 1px solid #79b85e; max-width: 1090px;">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="breadcomb-list">
            <h1>Lista de Funcionários</h1>

            <div class="alert alert-danger alert-dismissible id_erro" role="alert" id="id_sucesso_vazio" style="display: none;">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> <strong> Não foi encontrdo nenhum registo nesta categoria!</strong>
   </div>
              <div class="table-responsive">
                  <table class="table table-sc-ex" id="lista">
                
              <thead>
                    <tr>
                    {{-- <th>Entidade</th> --}}
                    <th>Nome</th>
                    
                    <th>Ocupação</th>
                  
                    
                     <th>Opcções</th>
                      </tr>
              </thead>
                <tbody>
                @foreach($funcionarios as $func)
              
                {{-- <td>{{$func->name}}</td> --}}
                 <td>{{$func->nome}}</td>
              
                 <td>{{$func->desiganacao}}</td>
               <td>
                <a href=" /editarfuncio/{{ $func->id }}" class="button-alt grayb">Editar</a>
               <a href="/apagafuncio2/{{ $func->id }}" ><button  class="button-alt">X</button></a>
              </tr>
                @endforeach
         
           </tbody>
        </table>
          <h5 class="text-center">{{$funcionarios->links() }}</h5>
      </div>
       <div class="row">
       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
       
            
              <div style="border-top: 1px solid #df822a; margin-top: 24px; padding-top: 10px;">
      <a  class="button-alt" style="float: right; color: #fff; margin-bottom: 15px;" href="{{ url('/home') }}">&laquo; Voltar</a>          
           
        </div>
    </div>
    {{-- </div> --}}
    </div>
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

          var roCount = $('#lista > tbody > tr').length;
       //alert(roCount);
       if (roCount == 0) {
          $('#id_sucesso_vazio').show();
          $('#lista').hide();
       }


      });
//          document.getElementById("classForm").onsubmit = function(){
//     location.reload(true);
// }
      
    </script>
@endsection