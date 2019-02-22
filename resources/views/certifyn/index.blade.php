 @extends('master')
@section('content')

 <div class="breadcomb-area">
    <div class="container branco" style="border: 1px solid #79b85e; max-width: 1090px;">
   
          <div class="breadcomb-list">
            <h1>Lista de Certificados de Origem e Classificação</h1>
              <div class="table-responsive">
                   <table class="table table-sc-ex">
                          <thead>
                                <tr>
                                <th>Nr. do Contrato</th>
                                <th>Consignatário</th>
                                <th>Destino</th>
                                <th>Marca do Fardo</th>
                                <th>Porto de Embarque</th> 
                            {{--     <th>CPeso Bruto</th> --}} 
                                {{-- <th>Peso Liquido</th> --}}
                                <th>Esquema Nr.</th>

                           
                              
                                 <th style="min-width: 260px;">Opções</th>




                              
                          </thead>
                            <tbody>
                             @foreach($certifyc as $fab)
                                <tr>                     
                                    
                                     <td>{{$fab->quantfardo}}</td>
                                     <td>{{$fab->consignatario}}</td>
                                     <td>{{$fab->destino}}</td>
                                     <td>{{$fab->marcafardo}}</td>
                                     <td>{{$fab->navio}}</td>
                                   {{--  <td>{{$fab->pesobruto}}</td>              
                                    <td>{{$fab->pesoliq}}</td>   --}}            
                                 {{--    <td>{{$fab->campanha}}</td> --}}
                                   {{--  <td>{{$fab->pesolik}}</td> --}}
                                    <td>{{$fab->esquema_id}}</td>
                                  <td> 
 
                                      
                                   
                                 {{--  <a type="button" href="{{ url('/certfica/'.$fab->id.'/edit')}}" class="btn btn-info" data-toggle="modal" data-target="#myModaltwo">Detalhes</a> --}}
                             

                               <a href="{{ url('/editarz/'.$fab->id.'/entrega')}}" class="button-alt grayb">Gerar Cert. Orig. Nac.</a>

                              <a target='_blank' href="{{ url('/users/report/' .$fab->id) }}" class="button-alt grayb">PDF</a>

                                     {{--   <a href="{{ url ('/nacional/'.$fab->id.'/criar1') }}" ><button  class="btn btn-danger notika-btn-danger">Nacional</button></a> --}}
                                     </td> 
                                      </td>
                                  </tr>
                                 @endforeach 
         
                  </tbody>
             </table>
             </div>
             </div>
           </div>
         </tr>
       </thead>
     </table>
  {{--    </div>
  </div> --}}
 </div>
</div>
</div>
</div>




@endsection
