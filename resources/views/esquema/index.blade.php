@extends('master')
@section('content')

   
      {{-- <d
        
  {{  <div class="container"> --}}
      {{-- ///////////////////////////////////////////////////////////////////////////// --}}
   <div class="modal fade" id="detalModal" role="dialog">
    <div class="modal-dialog modals-default">
        <div class="modal-content">
      {{--     <form action="/employee" method="POST" id="editeform">

            {{ method_field('PUT') }}
            {{ csrf_field() }} --}} 

            <input type="hidden" name="id_etiq" id="id_etiq">

            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">

                  <table>
                <thead>
                  <tr>
                    <td>Nome da Fabrica</td>
                    <td><input type="text" class="form-control" id="id_1"></td>
                    <td>Nr. da Lista</td>
                    <td> <input type="text" class="form-control"  id="id_2"></td>
                  </tr> 
                  <tr>
                    <td>Tipo</td>
                    <td><input type="text" class="form-control" id="id_3"></td>
                     <td>Destino</td>
                    <td> <input type="text" class="form-control"  id="id_4"></td>
                  </tr>

                   <tr>
                    <td>Quantidade</td>
                    <td><input type="text" class="form-control" id="id_5"></td>
                    <td>Nr Correspondente</td>
                    <td> <input type="text" class="form-control"  id="id_6"></td>
                  </tr>  

                   <tr>
                    <td>Peso Bruto</td>
                    <td><input type="text" class="form-control" id="id_7"></td> 
                    <td>Peso Liquido</td>
                    <td><input type="text" class="form-control" id="id_8"></td>
                    
                  </tr> 
                  <tr>
                   
                  <tr>
                    <td>Porto de embarque</td>
                    <td><input type="text" class="form-control" id="id_9"></td>
                    <td>Comprimento de Fibra</td>
                    <td> <input type="text" class="form-control"  id="id_10"></td>
                  </tr> 

                    <tr>
                    <td>Nr. de Esquema</td>
                    <td><input type="text" class="form-control" id="id_11"></td>
               
                  </tr>
                 
                </thead>
              </table> 
            
                   
            <div class="modal-footer">
                <button type="submit" class="btn btn-default" id="enviar">Enviar</button>
                {{-- <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button> --}}
            </div>
            </div>
          </form>

        </div>
    </div>
  </div>

<div class="breadcomb-area">
    <div class="container branco" style="border: 1px solid #79b85e; max-width: 1090px;">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="breadcomb-list">
            <h1>Listas de Esquemas de Embarque</h1>
              <div class="table-responsive">
                   <table class="table table-sc-ex">
              <thead>
                   <tr>
                    <th>Nr de Esquema</th>
                    <th>Quant. Fardos</th>
                    <th>Consignatario</th>
 
                    {{-- <th>Fabrica de Origem</th> --}}
                   
                    <th>P. Vigencia</th>
                    <th>Opções</th>
                  </tr>
                
              </thead>

                <tbody>
                     @foreach($esquemas as $fab)
                    <tr>                     
                        <td>{{$fab->id}}</td>
                        <td>{{$fab->quantfibra}}</td>
                         <td>{{$fab->consignatario}}</td>
                         {{-- <td>{{$fab->nome}}</td> --}}
                        
                        <td>{{$fab->comPeriudo}}&nbsp; á &nbsp;{{$fab->comPeriudo}}</td>              
                               
                        
                       <td> 

                       <button 
                         data-1="{{$fab->nome}}" 
                        data-2="{{$fab->consignatario}}" 
                        data-2="{{$fab->nrlista}}" 
                        data-3="{{$fab->tipo}}" 
                       data-4="{{$fab->destino}}" 
                       data-5="{{$fab->quantfibra}}" 
                       data-6="{{$fab->nrocorespond}}" 
                       data-7="{{$fab->pesobruto}}" 
                       data-8="{{$fab->pesoliq}}" 
                       data-9="{{$fab->portoembarq}}" 
                       data-10="{{$fab->comprimentofibra}}" 
                       data-11="{{$fab->id}}" 
                        type="button"  class="button-alt grayb">Detalhes</button>
                         <a target='_blank' href="{{ url('/esque/report/' .$fab->id) }}" class="button-alt grayb">PDF</a>
                </td>

             

                 </tr>
                @endforeach
         
                </tbody>
           </table>
             {{-- <h5 class="text-center">{{ $esquemas->links() }}</h5> --}}

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
            $('#id_1').val($(this).attr('data-1')); //poe id no input de modal
            $('#id_2').val($(this).attr('data-2')); //poe id no input de modal
            $('#id_3').val($(this).attr('data-3')); //poe id no input de modal
            $('#id_4').val($(this).attr(' data-4')); //poe id no input de modal
            $('#id_5').val($(this).attr('data-5')); //poe id no input de modal
            $('#id_6').val($(this).attr('data-6')); //poe id no input de modal
            $('#id_7').val($(this).attr('data-7')); //poe id no input de modal
            $('#id_8').val($(this).attr('data-8')); //poe id no input de modal
            $('#id_9').val($(this).attr('data-9')); //poe id no input de modal
            $('#id_10').val($(this).attr('data-10')); //poe id no input de modal
            $('#id_11').val($(this).attr('data-11')); //poe id no input de modal
          

            $('#detalModal').modal({
              show: true
            });
          });


      });
      
    </script>
@endsection

