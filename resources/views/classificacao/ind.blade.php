{{-- @extends('layouts.index') --}}
@extends('master')
@section('content')

{{-- ///////////////////////////////////////////////////////////////////////////// --}}
   <div class="modal animated rubberBand" id="detModal" role="dialog">
    <div class="modal-dialog modals-default">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <h1>Detalhes da Classificação</h1>
           {{--   <textarea id="id_det">  </textarea> --}}
                     
                     {{-- <input type="text"  id="id_det1"> --}}
             {{--     <input type="text"  id="id_det2">
                 <input type="text"  id="id_det3"> --}}
                 {{-- <input type="text"  id="id_det4"> --}}
              {{--    <input type="text"  id="id_det5">
                 <input type="text"  id="id_det6">
                 <input type="text"  id="id_det7"> --}}
                {{--  <input type="text"  id="id_det8"> --}}
             
              <table>
                <thead>
                  <tr>
                    <td style="text-align: right; padding-right: 5px">Nr. do Fardo</td>
                    <td><input type="text" class="form-control" id="id_det"></td>
                    <td style="text-align: right; padding-right: 5px">Lote</td>
                    <td> <input type="text" class="form-control"  id="id_det1"></td>
                  </tr> 
                  <tr>
                    <td style="text-align: right; padding-right: 5px">Período de Vigência</td>
                    <td><input type="text" class="form-control" id="id_det2"></td>
                    <td style="text-align: right; padding-right: 5px; text-align: center;">à</td>
                    <td><input type="text" class="form-control" id="id_det8"></td>
                    {{-- <td> </td> --}}
                  </tr>

                   <tr>
                    <td style="text-align: right; padding-right: 5px">Peso Líquido</td>
                    <td><input type="text" class="form-control" id="id_det3"></td>
                    <td style="text-align: right; padding-right: 5px">Peso bruto</td>
                    <td> <input type="text" class="form-control"  id="id_det4"></td>
                  </tr>  

                   <tr>
                    <td style="text-align: right; padding-right: 5px">Grau</td>
                    <td><input type="text" class="form-control" id="id_det7"></td> 
                    <td style="text-align: right; padding-right: 5px">Comprimento</td>
                    <td><input type="text" class="form-control" id="id_det9"></td>
                    
                  </tr> 
                  <tr>
                   
                  <tr>
                    <td style="text-align: right; padding-right: 5px">Fábrica</td>
                    <td><input type="text" class="form-control" id="id_det5"></td>
                    <td style="text-align: right; padding-right: 5px">Laboratório</td>
                    <td> <input type="text" class="form-control"  id="id_det6"></td>
                  </tr> 
                 
                </thead>
              </table>   
           
      
            </div>
            <div class="modal-footer">
               
                {{-- <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button> --}}
            </div>
        </div>
    </div>
  </div>

 
  <div class="breadcomb-area">
    <div class="container branco" style="border: 1px solid #79b85e; max-width: 1090px;">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="breadcomb-list">
            <h1 style="padding: 20px;">Resultados da Classificação de Amostras</h1>
             @if($classificacaos->count() > 0)
                <div class="table-responsive">
              <table class="table table-sc-ex">
              <thead>
                    <tr>
                    <th>Nr. do fardo</th>
                    <th>Lote</th>
                  {{--   <th>Safra</th> --}}
                    <th>Tipo</th>
                    <th>Comprimento</th>                   
                   {{--  <th>Grau</th>
                    <th>Fabrica</th> 
                    <th>Laboratorio</th>                  
                    <th>Tipo</th>                   
                    <th>Comprimento</th>  --}}                  
                     
                     
                     <th>Opções</th>
                
              </thead>
                <tbody>
                @foreach( $classificacaos as $clas)
              
                <td>{{$clas->numerofardo}}</td>
                <td>{{$clas->lote}}</td>                        
               {{--  <td>{{$clas->sacha}}</td> --}}
                <td>{{$clas->tipo}}</td>
                <td>{{$clas->comprimento}}</td>
               {{--  <td>{{$clas->grau}}</td> 
                <td>{{$clas->fabrica_id}}</td>
                <td>{{$clas->entidade_id}}</td>                       
                <td>{{$clas->tipo}}</td>                        
                <td>{{$clas->comprimento}}</td> --}}                        
                
                <td>
                 



                       <button 
                        data-fardo="{{$clas->numerofardo}}" 
                        data-lote="{{$clas->lote}}" 
                        data-sasha="{{$clas->sacha}}" 
                        data-sasha1="{{$clas->sacha1}}" 
                       data-pesolik="{{$clas->pesolik}}" 
                       data-pesobru="{{$clas->pesobru}}" 
                       data-grau="{{$clas->grau}}" 
                       data-fabrica_id="{{$clas->nome}}" 
                       data-entidade_id="{{$clas->name}}" 
                       data-tipo="{{$clas->tipo}}" 
                       data-cop="{{$clas->comprimento}}" 
                      {{--  data-comprimento="{{$comprimento}}" --}} 
                        type="button"  class="button-alt grayb">Detalhes</button>

                </td>

             

                 </tr>
                @endforeach
         
             </tbody>
           </table>
             <h5 class="text-center">{{ $classificacaos->links() }}</h5>
        </div>
          @else

                   <div class="alert alert-danger alert-dismissible id_sucesso" role="alert" id="id_sucesso" style="display: block; margin-top: 30px;">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> <strong style="align-content: center;"><h5> Não foi encontrado nenhum registo nesta categoria!</h5></strong></div>
                @endif
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
@section('script')
 <script  type="text/javascript">

      $(document).ready(function(){
      
          $('.grayb').click(function () {
            // $('#tt').html($(this).attr('data-id'));
            $('#id_det9').val($(this).attr('data-cop')); //poe id no input de modal
            $('#id_det').val($(this).attr('data-fardo')); //poe id no input de modal
            $('#id_det1').val($(this).attr('data-lote')); //poe id no input de modal
            $('#id_det2').val($(this).attr('data-sasha')); //poe id no input de modal
            $('#id_det8').val($(this).attr('data-sasha1')); //poe id no input de modal
            $('#id_det3').val($(this).attr('data-pesolik')); //poe id no input de modal
            $('#id_det4').val($(this).attr('data-pesobru')); //poe id no input de modal
            $('#id_det5').val($(this).attr('data-fabrica_id')); //poe id no input de modal
            $('#id_det6').val($(this).attr('data-entidade_id')); //poe id no input de modal
            $('#id_det7').val($(this).attr('data-tipo')); //poe id no input de modal
          

            $('#detModal').modal({
              show: true
            });
          });


      });
      
    </script>
@endsection
