@extends('master')
@section('content')
<div class="modal fade" id="editeModal" role="dialog">
    <div class="modal-dialog modals-default">
        <div class="modal-content" style="border: none; padding:20px;">
      {{-- <div class="container modal-cont" style=""> --}}

  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
  </div>
   <h3 align="center" style="color:#df822a; padding-bottom:10px;">Carregar Etiquetas</h3>
   <div class="alert" id="message" style="display: none"></div>
   <form method="post" id="upload_form" enctype="multipart/form-data">
      {{-- <input type="" id="user-id" value="{{$user}}">  --}}
    {{ csrf_field() }}



    <input type="hidden" id="estado" class="form-control" name="estado" value="Enviado"> 
      <input type="hidden" name="id_etiq" id="id_etiq">

    <div class="form-group" style="border: solid 1px #78a871">
     <table class="stable">
      <tr>
       <td width="40%" align="right"><label>Seleccione o ficheiro:</label></td>
       <td width="30"><input type="file" name="select_file" id="select_file" /></td>
       <td width="30%" align="left">




        <input style="margin-top:12px" type="submit" name="upload" id="upload" class="button-alt grayb" value="Carregar"></td>
      </tr>
      <tr>
       <td width="40%" align="right"></td>
       <td width="30"><span class="text-muted">(Apenas PDF; Tamanho Max. 10MB)</span></td>
       <td width="30%" align="left"></td>
      </tr>
     </table>
    </div>
   </form>
   <br />
   <span id="uploaded_image"></span>
 </div>
    </div>
  </div> 


{{-- ///////////////////////////modalde recusda///////////////// --}}
 <div class="modal fade" id="umoda" role="dialog ">
    <div class="modal-dialog modals-default">
        <div class="modal-content" style="border: none; padding:20px;">
      {{-- <div class="container modal-cont" style=""> --}}
  
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
  </div>
   <h3 align="center" style="color:#df822a; padding-bottom:10px;">Motivo da recusa</h3>
   <div class="alert" id="message" style="display: none"></div>
   <form method="post" id="recusa">
     <input type="hidden" id="user-id" value="{{$user}}"> 
    {{ csrf_field() }}

      <div class="alert alert-success alert-dismissible id_sucesso" role="alert" id="id_erro" style="display: none;" >
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> <strong> Dados enviados com sucesso </strong>
   </div> 

    <input type="hidden"  class="form-control" id="id_estado" name="id_estado" value="recusado">
      <input type="hidden" name="etiqueta_id" id="etiqueta_id" >

    <div class="form-group" style="border: solid 1px #78a871">
     <input type="text" id="motivo" style="min-width: 100%;" name="motivo" class="form-control">
    </div>

     <input style="margin-top:12px" type="submit"   class="button-alt grayb" value="Enviar"></td>
   </form>
   <br />
 
 </div>
    </div>
  </div> 
{{-- fim dos modais////////////////////////// --}}
            <form>
                 
<input type="hidden" name="ff" id="ff" value="{{ @$resultado }}">
</form>

<div class="breadcomb-area">
    <div class="container branco" style="border: 1px solid #79b85e; max-width: 1090px;">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="breadcomb-list">
            <h1>Etiquetas Processadas</h1>
       @if($cla->count() > 0)
                <div class="table-responsive">
              <table class="table table-sc-ex">
               <thead>
                              <tr>
                              <th>Tipo de etiqueta</th>
                              <th>Quantidade</th>
                              <th>Interválo</th>
                              {{-- <th>Gráfica</th> --}}
                              <th>Fábrica</th>
                              <th>Estado do Pedido</th>
                              {{-- <th>Opções</th>    --}}
                        </thead>

                          <tbody>
                             @foreach($cla as $fab)
                              <tr>                           
                            <td>{{$fab->tipoet}}</td>
                             <td>{{$fab->quantidade}}</td>
                             <td>{{$fab->inetervalo}}</td>
                             {{-- <td>{{$fab->name}}</td> --}}
                            <td>{{$fab->nome}}</td>              
                            <td>{{$fab->estado}}</td>                 
                           {{-- <td>  --}}
                          {{--   <button data-id="{{$fab->id}}" data-estado="{{$fab->estado}}" type="button"  class="button-alt grayb you" id="alt">Responder</button> 

                            <button data-prim="{{$fab->id}}" type="button"  class="button-alt grayb ref">Recusar</button> --}}
                           {{-- </td>               --}}
                          </tr>
                         @endforeach         
                    </tbody>
                 </table>
              <h5 class="text-center">{{ $cla->links() }}</h5>
              </div>
              @else

                   <div class="alert alert-danger alert-dismissible id_sucesso" role="alert" id="id_sucesso" style="display: block; margin-top: 30px;">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> <strong style="align-content: center;"><h5> Não foi encontrado nenhum registo nesta categoria!</h5></strong></div>
                @endif
                    <div class="row">
       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
       
            
              <div style="border-top: 1px solid #df822a; margin-top: 24px; padding-top: 10px;">
      <a  class="button-alt" style="float: right; color: #fff; margin-bottom: 15px;" href="{{ url('/listar/et') }}">&laquo; Voltar</a>          
           
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

  <script src="js/jquery.min.js"></script>
    <script  type="text/javascript">

      $(document).ready(function(){

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
     ////////////////////////////chamada do modal para upload.//////////////////////       
      
          $('.you').click(function () {
           $('.alert').hide();
            $('#id_etiq').val($(this).attr('data-id')); 
            $('#editeModal').modal({
              show: true
            });
          });

//////////////////////////////////////chamada do modal do recusa//////////////////////////////////
           $('.ref').click(function (e) {
             $('#editeModal').modal('hide');
            $('#etiqueta_id').val($(this).attr('data-prim')); //poe id no input de modal
            $('#umoda').modal({
              show: true
            });
          });

       



          
///////////////script////recusa de etiquetsa/////////////////////

          $('#recusa').submit(function(e){
            e.preventDefault();
           $.ajax({
              type:'POST',
              url: "/api/update",
              data:{'motivo':$('#motivo').val(), 'id_estado':$('#id_estado').val(), 'etiqueta_id':$("#etiqueta_id").val(), 'userId': $('#user-id').val()},
              success:function(result){
                if (result.is_valid){
   
               $('#id_sucesso').show();
               setTimeout(function(){
                $('.id_sucesso').fadeOut(10000);
               });
                 $(".ber")[0].reset();
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
         

//////////////////////////upload da pdf///////////////////////

   $('#upload_form').on('submit', function(event){
  event.preventDefault();
  $.ajax({
   url:"{{ route('ajaxupload.action') }}",
   method:"POST",
   data:new FormData(this),
   dataType:'JSON',
   contentType: false,
   cache: false,
   processData: false,
   success:function(data)
   {
    //   alert (data);
    // return;
    $('#message').css('display', 'block');
    $('#message').html(data.message);
    $('#message').addClass(data.class_name);
    $('#uploaded_image').html(data.uploaded_image);
   }
  })
 });
 });
      
    </script>
@endsection
