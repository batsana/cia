@extends('master')
@section('content')


   <div class="modal fade" id="umoda" role="dialog ">
    <div class="modal-dialog modals-default">
        <div class="modal-content" style="border: none; padding:20px;">
      {{-- <div class="container modal-cont" style=""> --}}
  
		   <div class="modal-header">
		    <button type="button" class="close" data-dismiss="modal">&times;</button>
		  </div>
			   <h3 align="center" style="color:#df822a; padding-bottom:10px;">Observações</h3>
			   <div class="alert" id="message" style="display: none"></div>

			   <form method="post" id="recusa">

			         {{ csrf_field() }}
			 <div class="alert alert-success alert-dismissible id_sucesso" role="alert" id="id_sucesso" style="display: none;" >
			       <strong> Contrato Homologado com sucesso </strong>
			   </div> 
 

			    <input type="hidden"  class="form-control" id="id_estado" name="id_estado" value="Homologado">
			      <input type="hidden" name="etiqueta_id" id="etiqueta_id" >

			    <div class="form-group" style="border: solid 1px #78a871">
			    	
			    <input type="text" name="motivo" style="min-width: 100%;"  class="form-control motivo" placeholder="Observações" value="{{ old('motivo') }}"> 
     
       </div>

        <input style="margin-top:12px" type="submit"   class="button-alt grayb" value="Enviar"></td>
      </form>
   <br />
 
 </div>
  </div>
  </div> 
  {{-- ?////////////////////////////////////////////////////////////////////////////// --}}
      <div class="breadcomb-area">
    <div class="container branco" style="border: 1px solid #79b85e; max-width: 1090px;">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="breadcomb-list">
            <h1>Lista de Contratos Não Homologados</h1>
      @if($contrato->count() > 0)
             @if (session('resultado'))
              <div class="alert alert-success" id="message">
              {{ session('resultado') }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button>
               </div>
             @endif
             
              <div class="table-responsive">
                   <table class="table table-sc-ex">
              <thead>
                    <tr>
                    <th>Nr. do Contrato</th>
                    <th>Consignatário</th>
                    <th>Destino</th>
                 {{--   <th>Marca do Fardo</th>--}}
                    <th>Porto de Embarque</th>
                {{--     <th>Campanha</th> --}}
                    {{-- <th>Periudo</th> --}}
                    <th>Quantidade da Fibra</th>
                    {{-- <th>Preco/</th> --}}
                    {{--<th>Fábrica</th>--}}

                    <th>Estado do Pedido</th>
                  
                     {{-- <th>Opções</th> --}}
                  
              </thead>
                <tbody>
                 @foreach($contrato as $fab)
                    <tr>                     
                        <td>{{$fab->nrcontrato}}</td>
                         <td>{{$fab->consignatario}}</td>
                         <td>{{$fab->destino}}</td>
                         {{--<td>{{$fab->marcafardo}}</td>--}}
                        <td>{{$fab->portoembarq}}</td>              
                     {{--    <td>{{$fab->campanha}}</td> --}}
                        {{-- <td>{{$fab->periudovigencia}}</td> --}}
                          <td>{{$fab->quantfibra}}</td>
                        {{-- <td>{{$fab->preco}}</td>               --}}
                       {{--  <td>{{$fab->nome}}</td> --}}             
                        <td>{{$fab->estado}}</td>              
                        
                       <td> 

                          {{-- <button type="button" href="{{ url('/contrato/'.$fab->id.'/edit')}}" class="btn btn-info" data-toggle="modal" data-target="#myModaltwo">Atualizar</button> 

                           <button data-id="{{$fab->id}}" data-estado="{{$fab->estado}}" type="button"  class="button-alt grayb">Responder</button>--}}

                            {{--  <button data-prim="{{$fab->id}}" type="button"  class="button-alt grayb ref">Responder</button>

                            <a href="/contrs/{{$fab->id}}" ><button  class="button-alt refuse">Recusar</button></a> --}}
                       </td>
                    

                      </tr>
                     @endforeach 
         
             </tbody>
        </table>
           <h5 class="text-center">{{ $contrato->links() }}</h5>
      </div>
       @else

                   <div class="alert alert-danger alert-dismissible id_sucesso" role="alert" id="id_sucesso" style="display: block; margin-top: 30px;">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> <strong style="align-content: center;"><h5> Não foi encontrado nenhum registo nesta categoria!</h5></strong></div>
                @endif
        <div class="row">
       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
       
            
              <div style="border-top: 1px solid #df822a; margin-top: 24px; padding-top: 10px;">
      <a  class="button-alt" style="float: right; color: #fff; margin-bottom: 15px;" href="{{ url('/gestao/contratos') }}">&laquo; Voltar</a>          
           
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
</div>



@endsection


@section('script')

  
    <script  type="text/javascript">

      $(document).ready(function(){

      	// setTimeout(function(){
       //          $('#message').fadeOut(7000);
       //         });
      
      
         
             $('.ref').click(function (e) {
             $('#editeModal').modal('hide');
            $('#etiqueta_id').val($(this).attr('data-prim')); //poe id no input de modal
            $('#umoda').modal({
              show: true
            });
          });

              $('#recusa').submit(function(e){
            e.preventDefault();
           $.ajax({
              type:'POST',
              url: "/api/updates",
              data:{'motivo':$('.motivo').val(), 'id_estado':$('#id_estado').val(), 'etiqueta_id':$("#etiqueta_id").val()},
              success:function(result){
                if (result.is_valid){
   
               $('#id_sucesso').show();
               setTimeout(function(){
                $('.id_sucesso').fadeOut(10000);
               });
               
              }
              },
              error: function (result) {
                $("#recusa")[0].reset();
                $('#id_erro').html('<p> Dados enviados com sucesso</p>')
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
