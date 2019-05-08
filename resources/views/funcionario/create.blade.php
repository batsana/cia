@extends('layouts.index')
@section('content')

  <div class="breadcomb-area">
    <div class="container branco" style="border: 1px solid #79b85e; max-width: 1090px;">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="breadcomb-list">



						    <div class="form-element-list" id="id_fun">
						    	  <div class="alert alert-success alert-dismissible id_sucesso" role="alert" id="id_sucesso" style="display: none;">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> <strong> Funcionário Registado com Sucesso!</strong>
   </div>
   <div class="alert alert-danger alert-dismissible id_erro" role="alert" id="id_erro" style="display: none;" >
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> <strong> Problemas no Registo do Funcionário.</strong>
   </div>
							   <form  class="fun">
							   {{-- <form  class="funcionar" action="{{ url('/salvarfuncionario') }}" method="post"> --}}
							                     {{ csrf_field() }} 
							       <input type="hidden" name="entidade_id" value="{{$entidades}}">
							       <input type="hidden" name="tipoEntidade" value="{{$tipo_id}}">
							     <input type="hidden" name="nivel" value="1">
							       
							         <h1>Registo de Funcionários</h1>            
							           
							            <br>
							  
							       <div class="row">
									    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									        <div class="form-group ic-cmp-int">
									            <div class="form-ic-cmp">
									            </div>
									            <div class="nk-int-st">
									               <input type="text" class="form-control" name="nome" placeholder="Nome do(a) funcionário(a)" value="" required autofocus>
									            </div>
									        </div>
									    </div>
                                       <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									        <div class="form-group ic-cmp-int">
									            <div class="form-ic-cmp">
									            </div>
									            <div class="nk-int-st">
									               <input  type="text" class="form-control" name="desiganacao" placeholder="Ocupação" value="{{ old('quantidade') }}" required autofocus>
									            </div>
									        </div>
									    </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									        <div class="form-group ic-cmp-int">
									            <div class="form-ic-cmp">
									            </div>
									            <div class="nk-int-st">
									      <input  type="text" class="form-control" name="" disabled value="Entidade Nr.: {!!$entidades!!}" required autofocus>
									            </div>
									        </div>
									    </div>

									   </div> 

									   <div class="row">
									   	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 ">
										        <div class="form-group ic-cmp-int">
										            <div class="form-ic-cmp">
										      
										             </div>
										            <div class="nk-int-st">

										                   <input id="email" type="text" class="form-control" placeholder="E-Mail (Deve ser ÚNICO)" name="email" value="{{ old('email') }}" required>

										                        @if ($errors->has('email'))
										                            <span class="help-block"> <strong>{{ $errors->first('email') }}</strong> </span>
										                        @endif
										          
										            </div>
										        </div>
										  </div>
										  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 ">
										        <div class="form-group ic-cmp-int">
										            <div class="form-ic-cmp">
										            {{-- <i class="notika-icon notika-support"></i> --}}
										             </div>
										            <div class="nk-int-st">
										                 <input id="password" type="password" class="form-control" placeholder="Senha" name="password" required>
										                @if ($errors->has('password'))
										                <span class="help-block"> <strong>{{ $errors->first('password') }}</strong> </span>
										                @endif           
										            </div>
										        </div>
										    </div>

										     <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 ">
											        <div class="form-group ic-cmp-int">
											            <div class="form-ic-cmp">
											            {{-- <i class="notika-icon notika-support"></i> --}}
											             </div>
											            <div class="nk-int-st">
											               
											                  <input id="password-confirm" type="password" class="form-control" placeholder="Confirmar Senha" name="password_confirmation" required>      
											            </div>
											        </div>
											    </div>
									       </div>  

									       <div class="row">
									       	 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 ">
											        <div class="form-group ic-cmp-int">
											            <div class="form-ic-cmp">
											            {{-- <i class="notika-icon notika-support"></i> --}}
											             </div>
											            <div class="nk-int-st">
											               
											                  <button type="submit" class="button-alt grayb">Registar</button>

                                                             <a class="button-alt grayb" href="{{ url('/home') }}" >&laquo; Voltar</a>     
											            </div>

											        </div>

											    </div>

									       </div>  
									            <div class="row">
       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
       
            
              <div style="border-top: 1px solid #df822a; margin-top: 24px; padding-top: 10px;">
      <a  class="button-alt" style="float: right; color: #fff;margin-bottom: -15px" href="{{ url('/home') }}">&laquo; Voltar</a>          
           
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


@endsection 


@section('scripts')
<script type="text/javascript">
    $(document).ready(function(){
   

      $('#id_fun').on('submit','.fun',function(e){
           e.preventDefault();

           form = $(this);
           $.ajax({
          url: "{{ url('/salvarfuncionario') }}",
            type:'post',
            dataType:'json',
            data:form.serialize(),
            success:function(result){


              if (result.is_valid){

               $('#id_sucesso').show();
               // setTimeout(function(){
               //  $('.id_sucesso').fadeOut(7000);
               // });
                $(".fun")[0].reset();
              }
              
            },

             error:function(result){


               $('#id_erro').show();
               // setTimeout(function(){
               //  $('.id_erro').fadeOut(7000);
               // });
            }
        
           });

      });
    });
</script>
@endsection