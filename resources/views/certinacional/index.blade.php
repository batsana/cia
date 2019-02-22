@extends('master')
@section('content')


 <div class="form-example-area">
        <div class="container">
   
      {{-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> --}}
              <div class="normal-table-list">
              <div class="basic-tb-hd">
        
  {{--   <div class="container"> --}}
      {{-- ///////////////////////////////////////////////////////////////////////////// --}}
   <div class="modal animated rubberBand" id="myModaltwo" role="dialog">
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
                <h2>Modal title</h2>
                <p>Por favor responda as requisicoes das Etiquetas enviadas</p>
                <div class="form-group ic-cmp-int">
            <div class="form-ic-cmp">
            <i class="notika-icon notika-support"></i>
             </div>
            <div class="nk-int-st">
                <select  id="id_estado" class="form-control" name="estado"> 
                           <option value="valors" disabled="" selected="">Estado do Contrato</option>
                           
                           <option value="espirado" >Espirado</option>
                        
                           <option value="enviado" >Pendente</option>
                        
                        </select>  
                                       
              </div>
           </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-default" id="enviar">Enviar</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
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
            <h1>Resultados de Classificacao de Amostras</h1>
          
                <div class="table-responsive">
              <table class="table table-sc-ex">
               <thead>
                    <tr>
                    <th>NR Contrato</th>
                    <th>Consignatario</th>
                    <th>Quantidade de fardos</th>
                    <th>Marca do Fardo</th>
                    <th>Destino</th>
                {{--     <th>Campanha</th> --}}
            
                  <th>Fabrica</th>

               
                  
                     <th>Opcoes</th>




                  
              </thead>
                <tbody>
                 @foreach($nacional as $nac)
                    <tr>   <td>{{$nac->numerocertify}}</td>                  
                          <td>{{$nac->consignatario}}</td>
                         <td>{{$nac->quantfardo}}</td>
                        <td>{{$nac->marcafardo}}</td>
                         <td>{{$nac->destino}}</td>
                       
                        <td>{{$nac->pesobruto}}</td>              
                   
                      
                      
                      <td> 

                          <button type="button" href="{{ url('/nacionalcert/'.$nac->id.'/edit')}}" class="button-alt grayb" data-toggle="modal" data-target="#myModaltwo">Imprimir</button>
                       
                      
                           <a href="/apagarnac/{{ $nac->id }}" ><button  class="button-alt">Remover</button></a>
                         </td>

                      </tr>
                     @endforeach 
         
             </tbody>
        </table>
      </div>
     </tr>
   </thead>
 </table>

              </div>
          </div>
        </div>
      </div>
    </div>
  </div>



@endsection

