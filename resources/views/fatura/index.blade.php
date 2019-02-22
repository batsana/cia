{{-- @extends('master') --}}
@extends('layouts.index')
@section('content')
{{-- /////////////////////////////////////////////////////////////////// --}}

 <div class="modal fade" id="myModalone" role="dialog">
      <div class="modal-dialog modals-default">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                   <div class="alert alert-success alert-dismissible id_sucesso" id="id_sucesso_vazios" style="display: none; margin-bottom: 20px">
         <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button>
            </div>
            <div class="alert alert-danger alert-dismissible id_erro" role="alert" id="id_erros" style="display: none;" >
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> 
    <strong> </strong>
   </div>   

                  <form  method="post" id="conf" >
                     <input type="text" name="ta_0" id="ta_0">
                 <table>
                   <thead>
                     <tr>
                    
                      <td><label>Número da fatura</label></td>
                       <td><input type="text" style="min-width: 170px;" disabled name="etiqueta_id" class="form-control" id="etiqueta_id"></td>
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

                      <tr>

                      <td><label>Estado da fatura</label></td>
                       <td><input type="text" style="min-width: 170px;" disabled name="" class="form-control" id="ta_id7"></td>
                         &nbsp;
                       <td><label></label></td>
                       {{-- <td></td> --}}
                       <td><button type="submit" class="button-alt grayb">Confirmar o Pagamento</button></td>
                     </tr>
{{-- 
                       <tr>

                    
                       <td><button type="submit" class="button-alt grayb">Confirmar o Pagamento</button></td>
                    
                     </tr> --}}

                    </form>

                     
                   </thead>
                 </table>
              </div>
              <div class="modal-footer">
                  {{-- <button type="button" class="button-alt grayb" data-dismiss="modal">Save changes</button> --}}
                 {{--  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> --}}
              </div>
          </div>
      </div>
  </div>

{{-- ///////////////////////////////////////////////////////// --}}


  <div class="breadcomb-area">
    <div class="container branco" style="border: 1px solid #79b85e; max-width: 1090px;">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="breadcomb-list">
            <h1>Lista de Faturas</h1>
              <div class="table-responsive">
                   <table class="table table-sc-ex">
                              <thead>
                                <tr>
                                <th>Nr. fatura</th>
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
                                   <td>{{$fab->transformacao}}</td>
                                   <td>{{$fab->liquidacao}}</td>
                                   <td>{{$fab->condices}}</td>
                                   <td>{{$fab->mercadoria}}</td>              
                                   <td>{{$fab->embalagem}}</td>              
                                 
                               
{{-- href="{{ url('/detalhar/'.$fab->id.'/edit')}}" --}}

                                 

                                      <td>
                                            <button 
                                            data-prim="{{$fab->numerofatura}}"
                                            data-0="{{$fab->numerofatura}}"
                                            data-1="{{$fab->transformacao}}"
                                            data-2="{{$fab->condices}}"
                                            data-3="{{$fab->mercadoria}}"
                                            data-4="{{$fab->embalagem}}"
                                            data-5="{{$fab->Liquidacao}}"
                                            data-6="{{$fab->nacionals_id}}"
                                            data-7="{{$fab->estado}}"
                                             type="button" class="button-alt grayb" data-toggle="modal" ">Detalhes</button>
                                         
                                            {{--  <button data-prim="{{$fab->id}}" type="button"  class="button-alt grayb">Detalhes</button> --}}

                                        <a href="/apagarfatura/{{ $fab->id }}" ><button   class="button-alt grayb">X</button></a>

                                          <a target='_blank' href="{{ url('/impressfatura/'.$fab->id)}}"  class="button-alt">PDF</a>


                                   </td>
                                 </tr>
                               @endforeach
                             </tbody>
                   
        </table>
          <h5 class="text-center">{{ $faturas->links() }}</h5>
      </div></div>
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
      $('.grayb').click(function (e) {
             // $('#editeModal').modal('hide');
            $('#etiqueta_id').val($(this).attr('data-prim')); 
            $('#ta_0').val($(this).attr('data-0')); 
            $('#ta_id1').val($(this).attr('data-1')); 
            $('#ta_id2').val($(this).attr('data-2')); 
            $('#ta_id3').val($(this).attr('data-3')); 
            $('#ta_id4').val($(this).attr('data-4')); 
            $('#ta_id5').val($(this).attr('data-5')); 
            $('#ta_id6').val($(this).attr('data-6')); 
            $('#myModalone').modal({
              show: true
            });
          });

////////////////////////////////        
   $('#conf').submit(function(e){
            e.preventDefault();  

            alert($("#ta_0").val());
           // $.ajax({
           //    type:'POST',
           //    url: "/api/faturar",
           //    data:{'ta_0':$("#ta_0").val()},
              
           //    success:function(result){

                
           //   $('#id_sucesso_vazio').html('<p>Dados editados com sucesso.</p>')
           //     $('#id_sucesso_vazio').show();

           //     setTimeout(function(){
           //      $('#id_sucesso_vazio').fadeOut(4000);
           //     });
           //        // $("#aceitar")[0].reset();

              
           //    },
           //    error: function (result) {
              
           //       $('#id_erro').html('<p>Problemas na edicão de Dados</p>')
           //     $('#id_erro').show();
           //     setTimeout(function(){
           //      $('.id_erro').fadeOut(4000);
           //     });

           //    }      
           //  });
          });

      });
      
    </script>
@endsection


  