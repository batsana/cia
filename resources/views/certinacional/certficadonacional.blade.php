{{-- @extends('master') --}}
@extends('layouts.index')
@section('content')


<div class="breadcomb-area">
    <div class="container branco" style="border: 1px solid #79b85e; max-width: 1090px;">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="breadcomb-list">
             
            <div class="form-element-list" id="id_bre">            
             <h1 style="margin-top: -15px;">Geracão de Certificados de Origem Nacional</h1>
                <div class="form-element-list" id="id_bee">            
            
            
             <form class="form-horizontal  bee"  method="POST">
                                    {{ csrf_field() }}

           <div class="alert alert-success alert-dismissible id_sucesso" role="alert" id="id_sucesso" style="display: none;">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> <strong> Certificados Nacional criado com sucesso!</strong>
           </div>

           <div class="alert alert-danger alert-dismissible id_erro" role="alert" id="id_erro" style="display: none;" >
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> <strong> Problemas na criacao de Certificado!</strong>
           </div>

                    
                    <div class="row">
                    
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="form-group ic-cmp-int">
                            <div class="form-ic-cmp">
                                {{-- <i class="notika-icon notika-phone"></i> --}}
                            </div>
                            <div class="nk-int-st">
                              <input type="text" class="form-control" name="quantfardo" placeholder="Quantidadede fardos" value="{{ old('quantfardo') }}" required autofocus>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="form-group ic-cmp-int">
                            <div class="form-ic-cmp">
                               {{--  <i class="notika-icon notika-mail"></i> --}}
                            </div>
                            <div class="nk-int-st">
                            {{--  value="{{$fab->numerunico}}" --}}
                               <input type="text" class="form-control" name="certif_id" placeholder="Quantidadede fardos" value="{{$sent->id}}" required autofocus>
                            </div>
                        </div>
                  
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="form-group ic-cmp-int">
                            <div class="form-ic-cmp">
                               {{--  <i class="notika-icon notika-mail"></i> --}}
                            </div>
                            <div class="nk-int-st">
                               <select  class="form-control"  name="contrato_id"> 
                                  
                                    <option value="disable">Contratos</option>
                                    @foreach($contrato as $c)
                                      <option value="{{$c->id}}">{{$c->nrcontrato}}</option>
                                    @endforeach
                                 </select>  
                              
                            </div>
                        </div>
                    </div>

                </div>




                <div class="row">
                   

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="form-group ic-cmp-int">
                            <div class="form-ic-cmp">
                                {{-- <i class="notika-icon notika-mail"></i> --}}
                            </div>
                            <div class="nk-int-st">
                              <input type="text" class="form-control" name="destino" placeholder="Destino" value="{{ old('destino') }}" required autofocus>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="form-group ic-cmp-int">
                            <div class="form-ic-cmp">
                                {{-- <i class="notika-icon notika-phone"></i> --}}
                            </div>
                            <div class="nk-int-st">
                               <input type="text" class="form-control" name="pesobruto" placeholder="Peso bruto" value="{{ old('pesobruto') }}" required autofocus>
                            </div>
                        </div>
                    </div>

                     <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="form-group ic-cmp-int">
                            <div class="form-ic-cmp">
                                {{-- <i class="notika-icon notika-mail"></i> --}}
                            </div>
                            <div class="nk-int-st">
                               <input  type="text" class="form-control" placeholder="Peso bruto" name="pesobruto">
                                 


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
                                 <input type="text" class="form-control" name="pesoliq" placeholder="Peso Liquido" value="{{ old('pesoliq') }}">          
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                       <div class="form-group ic-cmp-int">
                            <div class="form-ic-cmp">
                            {{-- <i class="notika-icon notika-support"></i> --}}
                             </div>
                            <div class="nk-int-st">
                              <input type="text" name="marcafardo"  class="form-control" placeholder="Marca de fardo" value="{{ old('marcafardo') }}">                 
                            </div>
                        </div>
                  </div>  
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                       <div class="form-group ic-cmp-int">
                            <div class="form-ic-cmp">
                            {{-- <i class="notika-icon notika-support"></i> --}}
                             </div>
                            <div class="nk-int-st">
                              <input type="text" name="ref"  class="form-control" placeholder="Referênia do fardo" value="{{ old('marcafardo') }}">                 
                            </div>
                        </div>
                  </div>
                  </div>


                    <div class="row">
                       <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="form-group ic-cmp-int">
                            <div class="form-ic-cmp">
                          {{--   <i class="notika-icon notika-support"></i> --}}
                             </div>
                            <div class="nk-int-st">
                               
                              <button type="submit" style="width: 50%;" class="button-alt grayb" >Enviar</button>
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
    </div>
</div>

@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function(){
   

      $('#id_bee').on('submit','.bee',function(e){
           e.preventDefault();
           form = $(this);
           $.ajax({
          url: "{{ url('/salvacertnacional') }}",
            type:'post',
            dataType:'json',
            data:form.serialize(),
            success:function(result){
              if (result.is_valid){

               $('#id_sucesso').show();
               setTimeout(function(){
                $('.id_sucesso').fadeOut(7000);
               });
                $(".bee")[0].reset();
              }
              
            },

             error:function(result){
               $('#id_erro').show();
               setTimeout(function(){
                $('.id_erro').fadeOut(4000);
               });
            }
        
           });

      });
    });
</script>
@endsection