@extends('master')
@section('content')


<div class="modal fade" id="umoda" role="dialog">
    <div class="modal-dialog modals-default">
        <div class="modal-content" style="border: none; padding:20px;">

  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
  </div>
   <h1 align="center" style="color:#df822a; padding-bottom:10px; text-align: left">Validação de Resultados de classificação por HVI</h1>

{{-- <div class="alert alert-success alert-dismissible id_sucesso" --}}
  <div class="alert alert-success alert-dismissible id_sucesso" role="alert" id="id_sucesso_vazio" style="display: none;">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> <strong> Não existem funcionarios resistados no sistema.</strong>
        </div>


   <div class="alert alert-danger alert-dismissible id_erro" role="alert" id="id_erro" style="display: none;" >
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> <strong> </strong>
   </div> 


<form method="post" id="aceitar">
            {{ csrf_field() }} 
            {{ method_field('PUT') }}
 
     <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group ic-cmp-int">
            <div class="nk-int-st">

             <input type="hidden" name="etiqueta_id" id="etiqueta_id">
             
<table><tr><td><textarea cols="40" rows="10" placeholder="Observações (Opcional)" name="obser" id="obser"></textarea></td></tr><tr><td> <input type="submit" class="button-alt grayb refuse" value="Aceitar"> </td></tr></table>
    

                                  
            </div>
           </div>
        </div>
        </div>
     
     </td>
   </form>
 </div>
</div>
  </div> 

  <div class="modal fade" id="umoda2" role="dialog">
    <div class="modal-dialog modals-default">
        <div class="modal-content" style="border: none; padding:20px;">

  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
  </div>
   <h1 align="center" style="color:#df822a; padding-bottom:10px; text-align: left">Validação de Resultados de classificação por HVI</h1>

  {{--  <div class="alert alert-success alert-dismissible id_sucesso" role="alert" id="id_sucesso_vazios" style="display: none;">
          <button type="button"  class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> <strong> Não existem funcionarios resistados no sistema.</strong>
        </div>
 --}}

        <div class="alert alert-success alert-dismissible id_sucesso" id="id_sucesso_vazios" style="display: none; margin-bottom: 20px">
         <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button>
            </div>


   <div class="alert alert-danger alert-dismissible id_erro" role="alert" id="id_erros" style="display: none;" >
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> 
    <strong> </strong>
   </div> 

<form method="post" id="recusa">
            {{ csrf_field() }} 
            {{ method_field('PUT') }}

     <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group ic-cmp-int">
            <div class="nk-int-st">

             <input type="hidden" name="etiqueta_id2" id="etiqueta_id2">
             
<table><tr><td><textarea cols="40" rows="10" placeholder="Observações (Opcional)" name="obser2" id="obser2"></textarea></td></tr><tr><td> <input type="submit" class="button-alt grayb refuse" value="Recusar"> </td></tr></table>                                 
            </div>
           </div>
        </div>
        </div>
     
     </td>
   </form>
 </div>
</div>
  </div> 


{{-- fim dos modais////////////////////////// --}}


<div class="breadcomb-area">
    <div class="container branco" style="border: 1px solid #79b85e; max-width: 1090px;">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="breadcomb-list">
            <h1>Resultados da Classificação de Amostras por HVI</h1>
          
                <div class="table-responsive">
              <table class="table table-sc-ex">
               <thead>
                              <tr>
                              <th>Estado</th>
                            <th>Sub.IDt</th>
                            <th>Uhml</th>
                            <th>Ml</th>
                            <th>Ui</th>
                            <th>Stth</th>
                            <th>Elong</th>
                            <th>Mic</th>
                            <th>Rd</th>
                            <th>B</th>
                     
                           {{--  <th>Cg</th>
                              <th>TrCount</th> --}}
                              <th>Opções</th>   
                        </thead>

                          <tbody>
                             @foreach($classicacaos as $clas)
                              <tr>                           
                           <td>{{$clas->estado}}</td>
                          <td>{{$clas->subId}}</td>
                          <td>{{$clas->uhml}}</td>
                          <td>{{$clas->ml}}</td>
                          <td>{{$clas->ui}}</td>
                          <td>{{$clas->strength}}</td>
                          <td>{{$clas->elongatio}}</td>
                          <td>{{$clas->mic}}</td>
                          <td>{{$clas->rd}}</td>
                          <td>{{$clas->b}}</td>                 
                           <td> 
                          
                               <button data-prim="{{$clas->id}}" id="envData" type="button"  class="button-alt grayb refuse">Aceitar</button>


                               <button data-prim2="{{$clas->id}}" id="envData2" type="button"  class="button-alt refuse">Recusar</button>

                           </td>              
                          </tr>
                         @endforeach         
                    </tbody>
                 </table>
                 <h5 class="text-center">{{ $classicacaos->links() }}</h5>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection


@section('script')
  <script src="js/jquery.min.js"></script>
    <script  type="text/javascript">

      $(document).ready(function(){

         $('#envData2').click(function (e) {
          etiq_id2 = $('#envData2').attr('data-prim2');          
          $('#etiqueta_id2').val(etiq_id2);
            $('#umoda2').modal({
              show: true
            });
          });
       // ???//////
         $('#envData').click(function (e) {
          etiq_id = $('#envData').attr('data-prim');          
          $('#etiqueta_id').val(etiq_id);
            $('#umoda').modal({
              show: true
            });
          }); 

////////////////////////////////        
   $('#aceitar').submit(function(e){
            e.preventDefault();  
           $.ajax({
              type:'POST',
              url: "/api/updathvi",
              data:{'etiqueta_id':$("#etiqueta_id").val(),
                   'obser':$("#obser").val()},
              
              success:function(result){

                
             $('#id_sucesso_vazio').html('<p>Dados editados com sucesso.</p>')
               $('#id_sucesso_vazio').show();

               setTimeout(function(){
                $('#id_sucesso_vazio').fadeOut(4000);
               });
                  $("#aceitar")[0].reset();

              
              },
              error: function (result) {
              
                 $('#id_erro').html('<p>Problemas na edicão de Dados</p>')
               $('#id_erro').show();
               setTimeout(function(){
                $('.id_erro').fadeOut(4000);
               });

              }      
            });
          });
  ////////////////////////////////////////////
       $('#recusa').submit(function(e){

            e.preventDefault();     
           $.ajax({
              type:'POST',
              url: "/api/updathvi2",
               data:{'obser2':$("#obser2").val(),
              'etiqueta_id2':$("#etiqueta_id2").val()},
              
               success:function(result){

                
             $('#id_sucesso_vazios').html('<p>Dados editados com sucesso.</p>')
               $('#id_sucesso_vazios').show();

               setTimeout(function(){
                $('#id_sucesso_vazios').fadeOut(4000);
               });
                  $("#recusa")[0].reset();

              
              },
              error: function (result) {
              
                 $('#id_erros').html('<p>Problemas na edicão de Dados</p>')
               $('#id_erros').show();
               setTimeout(function(){
                $('.id_erros').fadeOut(4000);
               });

              }     
            });
          });



  
      });
      
    </script>
@endsection
