@extends('master')
@section('content')



        
  {{--   <div class="container"> --}}
      {{-- ///////////////////////////////////////////////////////////////////////////// --}}
   <div class="modal animated rubberBand" id="Modal" role="dialog">
    <div class="modal-dialog modals-default">
        <div class="modal-content">

          <form  method="POST" id="form1">
            {{--   <input type="text" id="id_estado" name="id_estado"> --}}

            {{ method_field('PUT') }}
            {{ csrf_field() }} 

            <input type="hidden" name="id_etiq" id="id_etiq">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <h2>Modal title</h2>
                <p>Lista de Contratos submetidos</p>
                <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
            <i class="notika-icon notika-support"></i>
             </div>
            <div class="nk-int-st">
                <select  id="id_estado" class="form-control" name="estado"> 
                           <option value="valors" disabled="" selected="">Estado do Contrato</option>
                           
                           <option value="pendente" >Pendente</option>
                        
                           <option value="Homologado" >Homologado</option>
                        
                        </select> 

                                       
              </div>
           </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="button-alt grayb" id="enviar">Enviar</button>
               {{--  <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button> --}}
            </div>
          </form>

        </div>
    </div>
  </div>
  {{-- ?////////////////////////////////////////////////////////////////////////////// --}}
      <div class="breadcomb-area">
    <div class="container branco" style="border: 1px solid #79b85e; max-width: 1090px;">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="breadcomb-list">
            <h1>Lista de Fábricas da Algodoeira</h1>
              <div class="table-responsive">
                   <table class="table table-sc-ex">
              <thead>
                    <tr>
                    <th>Nr. do Contrato</th>
                    <th>Consignatário</th>
                    <th>Destino</th>
                    <th>Marca do Fardo</th>
                    <th>Porto de Embarque</th>
                {{--     <th>Campanha</th> --}}
                    {{-- <th>Periudo</th> --}}
                    <th>Quantidade da Fibra</th>
                    {{-- <th>Preco/</th> --}}
                    <th>Fábrica</th>

                    <th>Estado do Pedido</th>
                  
                     <th>Opções</th>
                  
              </thead>
                <tbody>
                 @foreach($contrato as $fab)
                    <tr>                     
                        <td>{{$fab->nrcontrato}}</td>
                         <td>{{$fab->consignatario}}</td>
                         <td>{{$fab->destino}}</td>
                         <td>{{$fab->marcafardo}}</td>
                        <td>{{$fab->portoembarq}}</td>              
                     {{--    <td>{{$fab->campanha}}</td> --}}
                        {{-- <td>{{$fab->periudovigencia}}</td> --}}
                          <td>{{$fab->quantfibra}}</td>
                        {{-- <td>{{$fab->preco}}</td>               --}}
                        <td>{{$fab->nome}}</td>              
                        <td>{{$fab->estado}}</td>              
                        
                       <td> 

                          {{-- <button type="button" href="{{ url('/contrato/'.$fab->id.'/edit')}}" class="btn btn-info" data-toggle="modal" data-target="#myModaltwo">Atualizar</button> --}}

                           <button data-id="{{$fab->id}}" data-estado="{{$fab->estado}}" type="button"  class="button-alt grayb">Responder</button> 
                       </td>
                    

                      </tr>
                     @endforeach 
         
             </tbody>
        </table>
           <h5 class="text-center">{{ $contrato->links() }}</h5>
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


@section('script')

  
    <script  type="text/javascript">

      $(document).ready(function(){
      
          $('.grayb').click(function () {
            // $('#tt').html($(this).attr('data-id'));
            $('#id_etiq').val($(this).attr('data-id')); //poe id no input de modal
            $('#id_estado').val($(this).attr('data-estado')); //poe id no input de modal

            $('#Modal').modal({
              show: true
            });
          });


          $('#form1').submit(function(e){
            e.preventDefault();
           $.ajax({
              type:'POST',
              url: "/api/updatecot",
              data:{'estado':$('#id_estado').val(), 'id_etiqueta':$("#id_etiq").val()},
            
              error: function () {
               alert("nao foi possivel");
              }      
            });
          });

      
      });
      
      document.getElementById("form1").onsubmit = function(){
    location.reload(true);
}
    </script>
@endsection
