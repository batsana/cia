  <table class="table table-sc-ex">
                          <thead>
                                <tr>
                                <th>NR Contrato</th>
                                <th>Consignatario</th>
                                <th>Destino</th>
                                <th>Marca do Fardo</th>
                                <th>Port Embark</th> 
                             <th>Campanha</th> 
                                <th>Periudo</th>
                              <th>Fabrica</th>      
                        <th>OVisualizacao e download</th>        
                          </thead>
                            <tbody>
                           {{--   @foreach($users as $fab) --}}
                                <tr>                     
                                    
                                     <td>{{$users->quantfardo}}</td>
                                     <td>{{$users->quantestenso}}</td>
                                     <td>{{$users->destino}}</td>
                                     <td>{{$users->marcafardo}}</td>
                                     <td>{{$users->navio}}</td>
                                    <td>{{$users->pesobruto}}</td>              
                                    <td>{{$users->pesolik}}</td>
                                    <td>{{$users->esquema_id}}</td>
                                  <td> 

                                     {{--  <a href="{{ url('users/report/download') }}" class="btn btn-danger notika-btn-danger">Download PDF</a> --}}
                                      <a href="{{ url('use/repo/views') }}" class="btn btn-info">view PDF</a>
                                      </td>
                                  </tr>
                              {{--    @endforeach  --}}
         
                  </tbody>
             </table>