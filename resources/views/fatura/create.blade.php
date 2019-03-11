@extends('layouts.index')
@section('content')


<div class="breadcomb-area">
    <div class="container branco" style="border: 1px solid #79b85e; max-width: 1090px;">
      <div class="row">
        {{-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> --}}
            <div class="form-element-list" id="id_beros"> 

            <h1>Geração de faturas</h1>              
         <form class="form-horizontal beros"  method="POST" action="{{ url('salvafatura') }}">
                    {{ csrf_field() }}

              <input type="hidden" name="estado"  value="homologado">
               {{ csrf_field() }}

                @if (session('resultado'))
                <div class="alert alert-success" id="message">
                  {{ session('resultado') }}
                    </div>
                    @endif
        
                <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                       <div class="form-group ic-cmp-int">
                            <div class="form-ic-cmp">
                               {{-- <i class="notika-icon notika-phone"></i> --}}
                              </div>
                            <div class="nk-int-st">
                             <input type="text" class="form-control" name="numerofatura" placeholder="Numero da Fatura" value="{{ old('numerofatura') }}">
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                      <div class="form-group ic-cmp-int">
                           <div class="form-ic-cmp">
                              {{-- <i class="notika-icon notika-support"></i> --}}
                            </div>
                            <div class="nk-int-st">
                                <input type="text" name="transformacao"  class="form-control" placeholder="Tarnasportadora" value="{{ old('transformacao') }}">                 
                            </div>
                       </div>
                  </div>

                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                       <div class="form-group ic-cmp-int">
                                <div class="form-ic-cmp">
                                     {{--  <i class="notika-icon notika-mail"></i> --}}
                               </div>
                               <div class="nk-int-st">
                              <input type="text" name="liquidacao" class="form-control" placeholder="Liquidacao" value="{{ old('liquidacao') }}">
                           </div>
                       </div>
                 </div>
                </div>
                 <div class="row">
                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <div class="form-group ic-cmp-int">
                                  <div class="form-ic-cmp">
                                  {{-- <i class="notika-icon notika-support"></i> --}}
                                   </div>
                                  <div class="nk-int-st">
                                       <input  type="text" class="form-control" name="condices" placeholder="Condicoes" value="{{ old('portoembarq') }}">

                                  </div>
                              </div>
                          </div>

                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <div class="form-group ic-cmp-int">
                                  <div class="form-ic-cmp">
                                      {{-- <i class="notika-icon notika-mail"></i> --}}
                                  </div>
                                  <div class="nk-int-st">
                                    <input type="text" class="form-control" name="mercadoria" placeholder="Mercadoria" value="{{ old('mercadoria') }}">
                                  </div>
                              </div>
                          </div>

                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <div class="form-group ic-cmp-int">
                                  <div class="form-ic-cmp">
                                      {{-- <i class="notika-icon notika-phone"></i> --}}
                                  </div>
                                  <div class="nk-int-st">
                                     <input type="text" class="form-control" name="embalagem" placeholder="Embalagem" value="{{ old('embalagem') }}">
                                  </div>
                              </div>
                          </div>
                    </div> 
                     <div class="row">
                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <div class="form-group ic-cmp-int">
                                  <div class="form-ic-cmp">
                                  {{-- <i class="notika-icon notika-support"></i> --}}
                                   </div>
                                  <div class="nk-int-st">
                                       <input type="text" class="form-control" name="marcas" placeholder="Marcas" value="{{ old('marcas') }}">          
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <div class="form-group ic-cmp-int">
                                  <div class="form-ic-cmp">
                                  {{-- <i class="notika-icon notika-support"></i> --}}
                                   </div>
                                  <div class="nk-int-st">
                                        <input type="text" class="form-control" placeholder="Observacoes" name="observacoes" value="{{ old('observacoes') }}">
                                
                                  </div>
                              </div>
                         </div>
                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <div class="form-group ic-cmp-int">
                                  <div class="form-ic-cmp">
                                  {{-- <i class="notika-icon notika-support"></i> --}}
                                   </div>
                                  <div class="nk-int-st">
                                     <select  class="form-control" name="nacionals_id"> 
                                          <option value="disable">Certificado nacional</option>
                                           @foreach($nacional as $c)
                                            <option value="{{$c->id}}">{{$c->id}}</option>
                                           @endforeach     
                                    </select>
                         
                                  </div>
                              </div>
                        </div>
                  </div>
                  <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                               <div class="form-group ic-cmp-int">
                                  <div class="form-ic-cmp">
                                  {{-- <i class="notika-icon notika-support"></i> --}}
                                   </div>
                                  <div class="nk-int-st">
                                       <input type="hidden" class="form-control" name="preco" placeholder="Preco" value="4.5">          
                                  </div>
                              </div>
                         </div>
                         <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                               <div class="form-group ic-cmp-int">
                                  <div class="form-ic-cmp">
                                {{--   <i class="notika-icon notika-support"></i> --}}
                                   </div>
                                  <div class="nk-int-st">
                                           
                                  </div>
                              </div>
                         </div>
                     </div>
                     <div class="row">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <div class="form-group ic-cmp-int">
                                  <div class="form-ic-cmp">
                                  {{-- <i class="notika-icon notika-support"></i> --}}
                                   </div>
                                  <div class="nk-int-st">
                                      <button type="submit" class="button-alt grayb">Registar</button>

                                      {{--  <button href="{{ url('/home') }}" value="save" class="button-alt grayb">&laquo; Voltar</button> --}} 
                                             
                                  </div>
                              </div>
                          </div> 
                     </div> 
               
            </form>
       </div>
        </div>
      </div>
    </div>
  </div>




@endsection
@section('scripts')
<script type="text/javascript">
    $(document).ready(function(){
   
        setTimeout(function(){
                $('#message').fadeOut(7000);
               });
    });
</script>

@endsection

