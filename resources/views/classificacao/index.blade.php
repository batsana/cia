
@extends('master')
@section('content')

 {{-- ///////////////////////////////////////////////////////////////////////////// --}}
   <div class="modal fade" id="clasModal" role="dialog">
    <div class="modal-dialog modals-default">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <h1>Dados da Classificação Visual/Manual</h1>

                  <div class="alert alert-success alert-dismissible id_sucesso" role="alert" id="id_sucesso" style="display: none;">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> <strong> Dados inseridos com Sucesso!</strong>
   </div>
   <div class="alert alert-danger alert-dismissible id_erro" role="alert" id="id_erro" style="display: none;" >
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> <strong> Problemas ao inserir os dados. </strong>
   </div> 


                <p>Por favor introduza os resultados da Classificacão Visual/Manual</p>

                {{-- ?????????????????????????????????????// --}}
           <form   id="classForm">  
            {{ csrf_field() }} 
            {{ method_field('PUT') }}

            <input type="hidden" name="id_etiq" id="id_etiq">
            <input type="hidden" name="agentelabor" id="agentelabor" value="{{ $userStr }}">
            <input type="hidden" name="estado" id="estado" value="class">
  <div class="row">
           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="form-group ic-cmp-int">
                  <div class="form-ic-cmp">
                  {{-- <i class="notika-icon notika-support"></i> --}}
                   </div>
                  <div class="nk-int-st">
                      <select  id="tipo" class="form-control" name="tipo"> 
                           <option value="0">Extra</option>
                           <option value="1" >I</option>                       
                           <option value="2" >II</option>
                           <option value="3" >III</option>
                           <option value="4" >IV</option>
                        </select>                   
                  </div>
              </div>
          </div> 



          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="form-group ic-cmp-int">
                  <div class="form-ic-cmp">
 
                   </div>
                  <div class="nk-int-st">
                         <input type="text" class="form-control" id="comprimento" required name="comprimento" placeholder="Comprimento">                   
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
                   
                          <textarea name="obser" id="obser" class="form-control" rows="3" placeholder="Observacoes" style="border: 1px solid #ccc; padding:5px"></textarea>

                  </div>
              </div>
          </div>
     </div>  {{-- //////////////////////////////////////////////////////////////////////// --}}


            </div>
            <div class="modal-footer">
               
                 <button type="submit" class="btn btn-default" id="enviar" 
                 ">Enviar</button>
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
            <h1>Amostras por Classificar (Manual/Visual)</h1>

<div class="alert alert-danger alert-dismissible id_erro" role="alert" id="id_sucesso_vazio" style="display: none;">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> <strong> Não existem amostras por classificar.</strong>
   </div>

              <div class="table-responsive">
                   <table class="table table-sc-ex" id="lista">
             <thead>
                    <tr>
                    <th>Nr. do Fardo</th>
                    <th>Lote</th>
                   

                     <th>Fábrica de Origem</th>
                     <th>Laboratório Destino</th>
                     <th>Opções</th>
                
              </thead>
                <tbody>
                @foreach( $classificacaos as $clas)
              
                <td>{{$clas->numerofardo}}</td>
                <td>{{$clas->lote}}</td>
                         
                <td>{{$clas->nome}}</td>
                <td>{{$clas->name}}</td>
              {{--   <td>{{$clas->tipo}}</td>
                <td>{{$clas->comprimento}}</td> --}}
                <td>
                <button 
                data-id="{{$clas->id}}" 
                data-tipo="{{$clas->tipo}}" 
                data-comp="{{$clas->comprimento}}" 
                type="button"  class="button-alt grayb">Classificar
              </button>
                        



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


@endsection

@section('script')

  
    <script  type="text/javascript">

      $(document).ready(function(){
      
          $('.grayb').click(function () {
        
            $('#id_etiq').val($(this).attr('data-id')); //poe id no input de modal
            // $('#id_tipo').val($(this).attr('data-tipo')); //poe id no input de modal
            // $('#id_comp').val($(this).attr('data-comp')); //poe id no input de modal

            $('#clasModal').modal({
              show: true
            });
          });



          $('#classForm').submit(function(e){
            e.preventDefault();
           $.ajax({
              type:'POST',
              url: "/api/classificar",
               data:{


                'tipo':$('#tipo').val(),
               'id_etiqueta':$("#id_etiq").val(), 
               'agentelabor':$("#agentelabor").val(), 
               'obser':$("#obser").val(), 
               'estado':$("#estado").val(),
               'comprimento':$("#comprimento").val()},
           
               success:function(result){
              if (result.is_valid){

               $('#id_sucesso').show();
               setTimeout(function(){
                $('.id_sucesso').fadeOut(7000);
               });
                
              }
              
            $(".bee")[0].reset();
            },

              error:function(result){
               $('#id_erro').show();
               setTimeout(function(){
                $('.id_erro').fadeOut(4000);
               });
            }    
            });
          });

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

