  @extends('master')
@section('content')
 <div class="modal fade" id="detModal" role="dialog">
    <div class="modal-dialog modal-large">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
            	<h1>Detalhes de Fardos Comercializados</h1>




               <table style="border: 1px solid #ccc; padding: 4px;">
               	<thead>
               		<tr style="border: 1px solid #ccc; padding: 4px;">
               			<td style="width: 240px;">Nr. de Esq. de Embarque:</td>
               			<td><strong><input type="text" id="id-prim" name="" style="border: none;"></strong></td>
               			
                    <td style="width: 240px;">Preço do Tipo Extra:</td>
                    <td><strong><input type="text" id="id-prim9" name="" style="border: none;"></strong></td>
               		</tr>

               		<tr  style="border: 1px solid #ccc; padding: 4px;">
               			<td>Total de Fardos:</td>
               			<td><strong><input type="text" id="id-prim2" name="" style="border: none;"></strong></td>
               			
                    <td style="width: 240px;">Preço do Tipo I:</td>
                    <td><strong><input type="text" id="id-prim5" name="" style="border: none;"></strong></td>
               		</tr>

               		<tr style="border: 1px solid #ccc; padding: 4px;">
               			<td style="width: 240px;">Data de Compra:</td>
               			<td><strong><input type="text" id="id-prim4" name="" style="border: none;"></strong></td>
               			<td style="width: 240px;">Preço do Tipo II:</td>
                    <td><strong><input type="text" id="id-prim6" name="" style="border: none;"></strong></td>
               		</tr>

               		<tr style="border: 1px solid #ccc; padding: 4px;">
               			
                    <td style="width: 240px;">Tipo de Algodão:</td>
                    <td><strong><input type="text" id="id-prim1" name="" style="border: none;"></strong></td>
               			
                    <td style="width: 240px;">Preço do Tipo III:</td>
                    <td><strong><input type="text" id="id-prim7" name="" style="border: none;"></strong></td>
               		</tr>
               		<tr style="border: 1px solid #ccc; padding: 4px;">
                    <td>Sequência de Fardos:</td>
                    <td><strong><input type="text" id="id-prim3" name="" style="border: none;"></strong></td>
               			
               			<td style="width: 240px;">Preço do Tipo IV:</td>
               			<td><strong><input type="text" id="id-prim8" name="" style="border: none;"></strong></td>
               		</tr>
               	</thead>
               </table>
            </div>
            {{-- <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Save changes</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div> --}}
        </div>
    </div>
</div>

  {{-- ?////////////////////////////////////////////////////////////////////////////// --}}
      <div class="breadcomb-area">
    <div class="container branco" style="border: 1px solid #79b85e; max-width: 1090px;">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="breadcomb-list">
            
                    <h1>Fardos Comercializados</h1>

<div class="alert alert-danger alert-dismissible id_erro" role="alert" id="id_sucesso" style="display: none;">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> <strong> Não existem fardos comercializados.</strong>
   </div>



              <div class="table-responsive deskmob">
                   <table class="table table-sc-ex" id="lista">
 
                <div class="row">
                    <div class="col-md-5 col-lg-5 col-sm-12">
                <input type="text" id="txt" name="lote" class="form-control" placeholder="Pesquisar por qualquer coluna" style="width: 100%;"> 
                </div>
              
          
                </div>
                
            
          
              <thead>
                    <tr>
                    <th>Nr. Contrato</th>
                    {{-- <th>Lote</th> --}}
                   

                     <th>Consignátario</th>
                     {{-- <th>Comprimento</th> --}}
                     <th>Fábrica de Origem</th>
                     <th>Porto de Embarque</th>
                     <th>Outros Detalhes</th>
                     
                 
                
              </thead>
                <tbody id="tabela">
                @foreach( $qualify as $clas)
              
                <td>{{$clas->nrcontrato}}</td>
                <td>{{$clas->consignatario}}</td>
                
                <td>{{$clas->user_id}}</td>
                <td>{{$clas->portoembarq}}</td>
                <td>
                {{--  <button data-prim="{{$clas->id}}" type="button"  class="button-alt grayb" id="refuse">Mais Detalhes</button> --}}
                 <button
                  data-prim="{{$clas->id}}" 
                  data-prim1="{{$clas->tipo}}" 
                  data-prim2="{{$clas->quantfardo}}" 
                  data-prim3="{{$clas->nrocorespond}}" 
                  data-prim4="{{$clas->created_at}}" 
                  data-prim5="{{$clas->tipoum_id}}" 
                  data-prim6="{{$clas->tipdois_id}}" 
                  data-prim7="{{$clas->tipotres_id}}" 
                  data-prim8="{{$clas->tipquatro_id}}" 
                  data-prim9="{{$clas->tipoextra}}" 
                  type="button" class="button-alt grayb">Detalhes</button>
                </td>
                

                 </tr>
                @endforeach
         
             </tbody>
           </table>
           <h5 class="text-center">{{ $qualify->links() }}</h5>
       </div>
             </div>
           </div>
        </div>
      </div>
    </div>
  </div>

@endsection


{{-- @section('script')
  <script src="js/jquery.min.js"></script>
    <script  type="text/javascript">

      $(document).ready(function(){


         $("#txt").on("keyup", function() {
        var value = $(this).val().toLowerCase();
      $("#tabela tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
       });
     });
       
         $('#myModal').click(function (e) {
           $('#clasModal').modal({
              show: true
          });
  
      });
      
    </script>
@endsection --}}
@section('script')
 <script  type="text/javascript">

      $(document).ready(function(){
      
          $('.grayb').click(function () {
            $('#id-prim').val($(this).attr('data-prim'));
            $('#id-prim1').val($(this).attr('data-prim1'));
            $('#id-prim2').val($(this).attr('data-prim2'));
            $('#id-prim3').val($(this).attr('data-prim3'));
            $('#id-prim4').val($(this).attr('data-prim4'));
            $('#id-prim5').val($(this).attr('data-prim5'));
            $('#id-prim6').val($(this).attr('data-prim6'));
            $('#id-prim7').val($(this).attr('data-prim7'));
            $('#id-prim8').val($(this).attr('data-prim8'));
            $('#id-prim9').val($(this).attr('data-prim9'));
            $('#detModal').modal({
              show: true
            });
          });



	       $("#txt").on("keyup", function() {
	       var value = $(this).val().toLowerCase();
	      $("#tabela tr").filter(function() {
	       $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
	       });
	     });

        

       var roCount = $('#lista > tbody > tr').length;
       //alert(roCount);
       if (roCount == 0) {
          $('#id_sucesso').show();
       }

      });
      
    </script>
@endsection