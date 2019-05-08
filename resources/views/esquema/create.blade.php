@extends('layouts.index')
@section('content')
<div class="breadcomb-area">
    <div class="container branco" style="border: 1px solid #79b85e; max-width: 1090px;">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="breadcomb-list">
        <div class="form-element-list" id="id_barraas">            
            <h1>Geração de Esquema de Embarque</h1>

             <div class="alert alert-success alert-dismissible id_sucesso" role="alert" id="id_sucesso" style="display: none;">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> <strong>Esquema  Gerado com Sucesso!</strong> &nbsp;
        <strong>Deseja adicionar mais fardos?</strong><a href="{{ url('/home') }}"><u> Não </u></a>&nbsp;<a href="" data-dismiss="alert" aria-label="Close"><u> Sim</u></a>
   </div>
   <div class="alert alert-danger alert-dismissible id_erro" role="alert" id="id_erro" style="display: none;" >
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> <strong> Problemas na Geração do Esquema. Por favor, tente novamente.</strong>
   </div>   

   <div class="alert alert-danger alert-dismissible id_reps" role="alert" id="id_reps" style="display: none; background-color:" >
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> <strong>Por favor, submeta primeiro os códigos dos fardos adicionados, antes de adicionar outros.</strong>
   </div>
   <div class="alert alert-danger alert-dismissible id_rep" role="alert" id="id_rep" style="display: none; background-color:" >
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> <strong>Por favor, submeta primeiro os códigos dos fardos adicionados, antes de adicionar outros.</strong>
   </div> 
            
              <form class="form-horizontal barras">
                    {{ csrf_field() }}

  <input type="hidden" name="estado"  value="Homologado">
  <input type="hidden" name="entidade_id" value="{!!$entidade_id !!}">
  <input type="hidden"required name="adi" id="adi"> 

 
    
    <div class="row">
    
  
     <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
                {{-- <i class="notika-icon notika-mail"></i> --}}
            </div>
            <div class="nk-int-st">
                          <select required id="contrato_id" class="form-control"  name="contrato_id"> 
                            <option value="">Nr. do Contrato</option>
                            @foreach($contratos as $c)
                              <option value="{{$c->id}}">{{$c->id}}</option>
                            @endforeach
                        </select>            
                      </div>
                </div>
      </div>

    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
            {{-- <i class="notika-icon notika-support"></i> --}}
             </div>
            <div class="nk-int-st">

            <select  id="id_tipo" class="form-control"  name="tipo"> 
                <option value="0">Tipo EXTRA</option>
                <option value="1">Tipo I</option>
                <option value="2">Tipo II</option>
                <option value="3">Tipo III</option>
                <option value="4">Tipo IV</option>
              
            
          </select>  
                   
            </div>
        </div>
    </div>

   {{--  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
            </div>
            <div class="nk-int-st">
               <table><tr><td style="color: #ababab; font-size: 14px; padding-right:5px;">Comprimento da Fibra: </td><td><input style="width: 97%" type="number" disabled value="0" disabled class="form-control" placeholder="Comprimento da Fibra" id="compia">
               <input type="hidden" value="0" name="comprimentofibra" id="compisa"  class="form-control" placeholder="Comprimento da Fibra"></td></tr></table>
               
            </div>
        </div>
    </div> --}}

       <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
            </div>
            <div class="nk-int-st">
               <table><tr><td style="color: #ababab; font-size: 14px; padding-right:5px;"></td><td>
                <input style="width: 97%" id="id_comprimento" type="number" name="comprimento" class="form-control" placeholder="Comprimento da Fibra" id="compia">
               
             </td></tr></table>
               
            </div>
        </div>
    </div>

</div>




<div class="row">
       <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
            </div>
            <div class="nk-int-st">
              <table><tr><td style="color: #ababab; font-size: 14px; padding-right:5px;">Peso Bruto: </td><td><input type="number" disabled value="0" class="form-control" name="pesobruto" id="pesobruto" style="width:100%;">
                <input type="hidden" value="0" lass="form-control" name="pesobruto" id="pesobruto2">     </td></tr></table>
               
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
            </div>
            <div class="nk-int-st">
              <input type="number" class="form-control" required name="quantidade"  id="id_quantidade" placeholder="Quantidade de Fardos" value="{{ old('quantfardo') }}">
            </div>
        </div>
    </div>


</div>

<div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
             </div>
            <div class="nk-int-st"> 


 <table><tr><td style="color: #ababab; font-size: 14px; padding-right:5px;">Peso Líquido: </td><td><input type="number" disabled value="0" class="form-control" id="pesoliq" placeholder="Peso Liquido" style="max-width:100%;">  
                 <input type="hidden" class="form-control" value="0" name="pesoliq" id="pesoliq2">         </td></tr></table>


                 
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
             </div>
            <div class="nk-int-st">
                     <input type="number" class="form-control" required name="lote" id="id_lote" placeholder="Lote" value="{{ old('pesoliq') }}"> 

          
            </div>
        </div>
</div>

    </div>


    <div class="row">

      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
            </div>
            <div class="nk-int-st">

                   <textarea required disabled name="nrocorespond" class="form-control" rows="5" id="adicionados"></textarea>
                    <input type="hidden" name="nrocorespond" class="form-control" rows="5" id="adicionados2">
                    <input type="hidden" name="nrcertific" class="form-control"  id="list">
                    <input id="classificacao_id" name="classificacao_id" type="hidden" value="">

                    {{-- <input id="list"  type="hidden" value=""> --}}
                   
            </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 col-lg-4">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
             </div>
            <div class="nk-int-st">
                {{-- <input id="adia"  type="text" name="lista" value=""> --}}
           <input id="adia" name="adia" type="hidden" value="">
              <button type="button" id="adicao" class="button-alt grayb">Adicionar Fardo(s)</button>
            </div>
        </div>
    </div>
      </div>

    <div class="row">
       <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
             </div>
            <div class="nk-int-st">
               
              <button type="submit" style="width: 50%;" class="button-alt grayb" >Enviar</button>
            </div>
        </div>
    </div>
    </div>

                </form>
            </div>
              <div class="row">
       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
       
            
              <div style="border-top: 1px solid #df822a; margin-top: 24px; padding-top: 10px;">
      <a  class="button-alt" style="float: right; color: #fff; margin-bottom: 15px;" href="{{ url('/home') }}">&laquo; Voltar</a>          
           
        </div>
    </div>
    </div>
        </div>
        </div>
    </div>
    </div>
</div>
@endsection







@section('scripts')
<script type="text/javascript">
    $(document).ready(function(){
    $('.barras').on('click','#adicao',function(event){
      event.preventDefault();

       $.ajax({
         url:"/esquam", 
         type:'get',
         dataType:'json',
         data:{
            'quantidade':$('#id_quantidade').val(), 
            'comprimento':$('#id_comprimento').val(), 
            'lote':$('#id_lote').val(),
            'tipo':$('#id_tipo').val()
         },
         success:function(results){
          //alert (1);

   // console.log(results);

        if (results == 0) {
          // alert ('Nao existem fardos disponiveis com as caracteristicas pretendidas');
           $('#id_erro').html('<p>Nao existem fardos disponíveis com as características pretendidas.</p>')
               $('#id_erro').show();
               // setTimeout(function(){
               //  $('.id_erro').fadeOut(7000);
               // });
          return;
        } else {

          if (results.z !== 1) {
       
          // alert ('Existem apenas ' + results + " fardos disponiveis com as caracteristicas pretendidas");
          $('#id_erro').html('<p> Existe(m) apenas ' + results + " fardo(s) disponível(is) com as características pretendidas.</p>");
               $('#id_erro').show();
               // setTimeout(function(){
               //  $('.id_erro').fadeOut(7000);
               // });
          return;
          }
        }
        

          if ($('#adicionados').val().length !== 0) {
              $('#id_rep').show();
               // setTimeout(function(){
               //  $('.id_rep').fadeOut(5000);
               // });
            return;
          }else{
             //substrVal1 = [];



             


             substrVal1 = "";
               for(var i=0; i<results.dados.length; i++){
               
            substrVal1 += ", "+results.dados[i].barcod;

            $('#list').val($('#list').val()+", "+results.dados[i].lista);
            $('#adicionados2').val($('#adicionados2').val()+", "+results.dados[i].barcod);
            $('#adicionados3').val($('#adicionados3').val()+", "+results.dados[i].barcod);
            // $('#adicionarlista').val($('#adicionarlista').val()+", "+results.dados[i].lista);




            //  substrVal3 = "";
            //    for(var i=0; i<results.dados.length; i++){    
            // substrVal3 += ", "+results.dados[i].id;
            // substrVal4 = substrVal3.substr(1);
            // $('#adi').val(substrVal4);

            $('#adi').val($('#adi').val()+","+results.dados[i].id);
            $('#adia').val($('#adia').val()+"/"+results.dados[i].lista);



            $('#pesoliq2').val(parseFloat($("#pesoliq2").val())+parseFloat(results.dados[i].pesolik));
            $('#pesoliq2').val(parseFloat($("#pesoliq2").val())+parseFloat(results.dados[i].pesolik));
            $('#compia').val(parseFloat($("#compia").val())+parseFloat(results.dados[i].comprimento));
            $('#compisa').val(parseFloat($("#compisa").val())+parseFloat(results.dados[i].comprimento));


            $('#pesoliq').val(parseFloat($("#pesoliq").val())+parseFloat(results.dados[i].pesolik));
            $('#pesoliq').val(parseFloat($("#pesoliq").val())+parseFloat(results.dados[i].pesolik));
            $('#pesobruto').val(parseFloat($("#pesobruto").val())+parseFloat(results.dados[i].pesobru));           
            $('#pesobruto2').val(parseFloat($("#pesobruto2").val())+parseFloat(results.dados[i].pesobru));
            
          }
          substrVal2 = substrVal1.substr(1);
          $('#adicionados').val(substrVal2);
          }

         },
           error:function(results){
              
              // alert('bag');
               $('#id_erro').html('<p>Problemas na adição de fardos.</p>')
               $('#id_erro').show();
               // setTimeout(function(){
               //  $('.id_erro').fadeOut(4000);
               // });

            }
          });
          });

          $('#id_barraas').on('submit','.barras',function(e){
           e.preventDefault();

           var form=$(this);
           $.ajax({
            url: "{{ url('salvaesquema') }}",
            type:'post',
            dataType:'json',
            data:form.serialize(),
            success:function(result){
              console.log(result);
              if (result.is_valid){
                  
               $('#id_sucesso').show();
                $(".barras")[0].reset();
              }
              

              if (result.quantia){
               // console.log(result);
               $('#id_erro').html('<p>As quantidades inseridas estao acima do indicado.</p>')
               $('#id_erro').show();
               // setTimeout(function(){
               //  $('.id_erro').fadeOut(4000);
               // });
              }
            

              if (result.status){
               // console.log(result);
               $('#id_erro').html('<p>O contrato seleccionado não está homologado.</p>')
               $('#id_erro').show();
               // setTimeout(function(){
               //  $('.id_erro').fadeOut(4000);
               // });
              }
            
              if (result.statusa){
                // console.log(result);
               $('#id_erro').html('<p>O contrato seleccionado contém pelo menos 1 factura não paga.</p>')
               $('#id_erro').show();
               // setTimeout(function(){
               //  $('.id_erro').fadeOut(4000);
               // });
              }
             
            },

            error:function(result){
              console.log(result);
             // $('#id_erro').html('<p>Problemas na Geração do Esquema de Embarque</p>')
             //   $('#id_erro').show();
             //   setTimeout(function(){
             //    $('.id_erro').fadeOut(4000);
             //   });
            }
           });
           
        });


    });
</script>
@endsection
