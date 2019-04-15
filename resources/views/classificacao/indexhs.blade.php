{{-- @extends('layouts.index') --}}
@extends('master')
@section('content')

 {{-- ///////////////////////////////////////////////////////////////////////////// --}}
   <div class="modal animated rubberBand" id="editeModalhvi" role="dialog">
    <div class="modal-dialog modals-default">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
              

                {{-- ?????????????????????????????????????// --}}
           <form method="POST" id="hviform">  
            {{ csrf_field() }} 
            {{ method_field('PUT') }}

            
             <input type="hidden" name="id_hv" id="id_hv">
              
              <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="form-group ic-cmp-int">
                        <div class="form-ic-cmp">
                        <i class="notika-icon notika-support"></i>
                         </div>
                        <div class="nk-int-st">
                            {{-- <input id="id_1" type="text" class="form-control" name="estado" placeholder="Quantidade" value="{{ old('estado') }}" required autofocus> --}} 

                            <select name="estado" id="id_1">
                              <option value="Autorizado">Valido</option>
                              <option value="Autorizado">Invalido</option>
                            </select>                   
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="form-group ic-cmp-int">
                        <div class="form-ic-cmp">
                        <i class="notika-icon notika-support"></i>
                         </div>
                        <div class="nk-int-st">
                             <input id="id_3" type="text" class="form-control" name="subId" placeholder="subId" value="{{ old('subId') }}" required autofocus> 
                                                
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="form-group ic-cmp-int">
                        <div class="form-ic-cmp">
                        <i class="notika-icon notika-support"></i>
                         </div>
                        <div class="nk-int-st">
                           <input id="id_12" type="text" class="form-control" name="cg" placeholder="Cg" value="{{ old('Cg') }}" required autofocus>                   
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="form-group ic-cmp-int">
                        <div class="form-ic-cmp">
                        <i class="notika-icon notika-support"></i>
                         </div>
                        <div class="nk-int-st">
                              <input id="id_4" type="text" class="form-control" name="uhml" placeholder="Uhml" value="{{ old('uhml') }}" required autofocus>                   
                        </div>
                    </div>
                </div>

            </div>  
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 col-ofset-2">
                    <div class="form-group ic-cmp-int">
                        <div class="form-ic-cmp">
                        <i class="notika-icon notika-support"></i>
                         </div>
                        <div class="nk-int-st">
                            <input id="id_5" type="text" class="form-control" name="ml" placeholder="Ml" value="{{ old('ml') }}" required autofocus>                    
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="form-group ic-cmp-int">
                        <div class="form-ic-cmp">
                        <i class="notika-icon notika-support"></i>
                         </div>
                        <div class="nk-int-st">
                              <input id="id_6" type="text" class="form-control" name="ui" placeholder="Ul" value="{{ old('ul') }}" required autofocus>                   
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="form-group ic-cmp-int">
                        <div class="form-ic-cmp">
                        <i class="notika-icon notika-support"></i>
                         </div>
                        <div class="nk-int-st">
                              <input id="id_7" type="text" class="form-control" name="strength" placeholder="Strength" value="{{ old('strength') }}" required autofocus>                   
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="form-group ic-cmp-int">
                        <div class="form-ic-cmp">
                        <i class="notika-icon notika-support"></i>
                         </div>
                        <div class="nk-int-st">
                              <input id="id_8" type="text" class="form-control" name="elongatio" placeholder="Alongamento" value="{{ old('elongatio') }}" required autofocus>                   
                        </div>
                    </div>
                </div>
            </div>
            </div>  
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="form-group ic-cmp-int">
                        <div class="form-ic-cmp">
                        <i class="notika-icon notika-support"></i>
                         </div>
                        <div class="nk-int-st">
                            <input id="id_13" type="text" class="form-control" name="mic" placeholder="Mic" value="{{ old('mic') }}" required autofocus>                    
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="form-group ic-cmp-int">
                        <div class="form-ic-cmp">
                        <i class="notika-icon notika-support"></i>
                         </div>
                        <div class="nk-int-st">
                              <input id="id_9" type="text" class="form-control" name="mic" placeholder="mic" value="{{ old('mic') }} " required autofocus>                   
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="form-group ic-cmp-int">
                        <div class="form-ic-cmp">
                        <i class="notika-icon notika-support"></i>
                         </div>
                        <div class="nk-int-st">
                              <input id="id_10" type="text" class="form-control" name="quantidade" placeholder="Quantidade" value="{{ old('quantidade') }}" required autofocus>                   
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="form-group ic-cmp-int">
                        <div class="form-ic-cmp">
                        <i class="notika-icon notika-support"></i>
                         </div>
                        <div class="nk-int-st">
                              <input id="id_11" type="text" class="form-control" name="quantidade" placeholder="Quantidade" value="{{ old('quantidade') }}" required autofocus>                   
                        </div>
                    </div>
                </div>

            </div>

            </div>


            <div class="modal-footer">
                <button type="submit" style="float: left; margin-left: 50px; margin-top: -40px;" class="btn btn-default" id="enviar" >Enviar</button>
                {{-- <button type="button"  class="btn btn-default" data-dismiss="modal">Fechar</button> --}}
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
            <h1 style="padding: 20px;">Resultados da Classificação de Amostras</h1>
          
                <div class="table-responsive">
              <table class="table table-sc-ex">
              <thead>
                    <tr>
                   {{--  <th>N.Frd</th>
                    <th>N.Txt</th> --}}
                     {{-- <th>N.Frd</th> --}}
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
                {{--     <th>Trcount</th> --}}
                    <th>Cg</th>
                      <th>TrCount</th>

              {{--       <th>TrArea</th>   --}}               
                   {{--  <th>LfGrade</th>
                    <th> Moise</th>
                    <th> Sfi</th> --}}
                  {{--   <th> Mr</th>
                    <th> Sold</th>
                    <th> Inv</th>
                    <th> D.P</th>
                    <th> LAB</th>
                    <th> FAB</th> --}}
                    <th> Opcoes</th> 
                   
             
                   
                
              </thead>
                <tbody>
                @foreach( $classicacaos as $clas)
              
               {{--  <td>{{$clas->numerofardo}}</td>
                <td>{{$clas->numerotext}}</td> --}}
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
               {{--  <td>{{$clas->trcount}}</td> --}}
                <td>{{$clas->cg}}</td>
                {{-- <td>{{$clas->cg}}</td> --}}
                <td>{{$clas->trcount}}</td>
                <td>
                  <a href="/aphvi/{{$clas->id}}" ><button  class="button-alt refuse">X</button></a>
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

