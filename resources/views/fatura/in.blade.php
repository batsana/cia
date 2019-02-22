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
                                 @foreach($fact as $fab)
                                   <tr>
                                   <td>{{$fab->numerofatura}}</td>
                                   <td>{{$fab->transformacao}}</td>
                                   <td>{{$fab->liquidacao}}</td>
                                   <td>{{$fab->condices}}</td>
                                   <td>{{$fab->mercadoria}}</td>              
                                   <td>{{$fab->embalagem}}</td>              
                                   <td>{{$fab->estado}}</td>              
                                 
                               
{{-- href="{{ url('/detalhar/'.$fab->id.'/edit')}}" --}}

                                 

                                      <td>
                                           

                                   </td>
                                 </tr>
                               @endforeach
                             </tbody>
                   
        </table>