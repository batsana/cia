@extends('master')
@section('content')


   <div class="modal fade" id="umoda" role="dialog ">
    <div class="modal-dialog modals-default">
        <div class="modal-content" style="border: none; padding:20px;">
      {{-- <div class="container modal-cont" style=""> --}}
  
		   <div class="modal-header">
		    <button type="button" class="close" data-dismiss="modal">&times;</button>
		  </div>
			
			   <div class="alert" id="message" style="display: none"></div>
			   <form method="post" id="recusa">

			         {{ csrf_field() }}
			 <div class="alert alert-success alert-dismissible id_sucesso" role="alert" id="id_sucesso" style="display: none;" >
			       <strong> Pagamento confirmado com sucesso!</strong>
			   </div> 
 

			    <input type="hidden"  class="form-control" id="id_estado" name="id_estado" value="Homolgado">
			      <input type="hidden" name="etiqueta_id" id="etiqueta_id" >

			    <div class="form-group" style="border: solid 1px #78a871">
			    	<table>
                   <thead>
                     <tr>
                    
                      <td><label>Estado da fatura</label></td>
                       <td><input type="text" style="min-width: 170px;" disabled name="" class="form-control" id="ta_id7"></td>
                       &nbsp;
                       <td><label>Transformacões</label></td>
                       <td><input type="text" style="min-width: 170px;" disabled name="" class="form-control" id="ta_id1"></td>
                     </tr> 
 
                     <tr>

                      <td><label>Condicões</label></td>
                       <td><input type="text" style="min-width: 170px;" disabled name="" class="form-control" id="ta_id2"></td>
                         &nbsp;
                       <td><label>Liquidacao</label></td>
                       <td><input type="text" style="min-width: 170px;" disabled name="" class="form-control" id="ta_id3"></td>
                     </tr> 
                     

                      <td><label>Certificado Inter. Nr.</label></td>
                       <td><input type="text" style="min-width: 170px;" disabled name="" class="form-control" id="ta_id6"></td>
                         &nbsp;
                       <td><label>Embalagem</label></td>
                       <td><input type="text" style="min-width: 170px;" disabled name="" class="form-control" id="ta_id4"></td>
                     </tr>

                       {{-- <td></td> --}}
                      
{{-- 
                       <tr>

                    
                       <td><button type="submit" class="button-alt grayb">Confirmar o Pagamento</button></td>
                    
                     </tr> --}}


                     
                   </thead>
                 </table>
     
       </div>
         <button type="submit" class="button-alt grayb">Confirmar o Pagamento</button></td>
                     
       </td>
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
            <h1>Lista de Faturas</h1>

             @if (session('resultado'))
              <div class="alert alert-success" id="message">
              {{ session('resultado') }}
               </div>
             @endif
             
              <div class="table-responsive">
                <table class="table table-sc-ex">
                              <thead>
                                <tr>
                                <th>Nr. fatura</th>
                                <th>Estado da fatura</th>
                                <th>Transportadora</th>
                                <th>Liquidacao</th>
                                <th>Condicoes</th>
                                <th>Mercadoria</th>

                                <th>Embalagem</th>
                              
                                 <th>Opcoes</th>
                                  
                              </thead>
                              <tbody>
                                 @foreach($faturas as $fab)
                                   <tr>
                                   <td>{{$fab->numerofatura}}</td>
                                   <td>{{$fab->estado}}</td>
                                   <td>{{$fab->transformacao}}</td>
                                   <td>{{$fab->liquidacao}}</td>
                                   <td>{{$fab->condices}}</td>
                                   <td>{{$fab->mercadoria}}</td>              
                                   <td>{{$fab->embalagem}}</td>              
                        
                       <td> 

                          <button 
                                            data-prim="{{$fab->id}}"
                                            data-prims="{{$fab->numerofatura}}"
                                            data-0="{{$fab->numerofatura}}"
                                            data-1="{{$fab->transformacao}}"
                                            data-2="{{$fab->condices}}"
                                            data-3="{{$fab->mercadoria}}"
                                            data-4="{{$fab->embalagem}}"
                                            data-5="{{$fab->Liquidacao}}"
                                            data-6="{{$fab->nacionals_id}}"
                                            data-7="{{$fab->estado}}"
                                             type="button"  class="button-alt grayb ref">Detalhes</button>
                            <a target='_blank' href="{{ url('/faturado/' .$fab->id) }}" class="button-alt grayb">PDF</a>
                            <a href="/contr/{{$fab->id}}" ><button  class="button-alt refuse">X</button></a>
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
</div>
</div>



@endsection


@section('script')

  
    <script  type="text/javascript">

      $(document).ready(function(){

      	setTimeout(function(){
                $('#message').fadeOut(7000);
               });
      
      
         
             $('.ref').click(function (e) {
             $('#editeModal').modal('hide');
            $('#etiqueta_id').val($(this).attr('data-prim')); //poe id no input de modal
            $('#ta_0').val($(this).attr('data-0')); 
            $('#ta_id1').val($(this).attr('data-1')); 
            $('#ta_id2').val($(this).attr('data-2')); 
            $('#ta_id3').val($(this).attr('data-3')); 
            $('#ta_id4').val($(this).attr('data-4')); 
            $('#ta_id5').val($(this).attr('data-5')); 
            $('#ta_id6').val($(this).attr('data-6'));
            $('#ta_id7').val($(this).attr('data-7'));
            $('#umoda').modal({
              show: true
            });
          });

              $('#recusa').submit(function(e){
            e.preventDefault();
           $.ajax({
              type:'POST',
              url: "/api/updatest",
              data:{'etiqueta_id':$("#etiqueta_id").val()},
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



  