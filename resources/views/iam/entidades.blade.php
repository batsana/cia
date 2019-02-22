

@extends('master')
@section('content')


<div class="breadcomb-area">
		<div class="container branco" style="border: 1px solid #79b85e; max-width: 1090px; padding-top: 20px; padding-bottom: 20px;">
		
<div class="row">



							<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
							<a title="Gestão de Entidades" href="{{ url('registar/entidade') }}"><img class="dash-image" src="/imgs/registo-entidades.png" style="max-height: 200px;"></a>
                              
							</div>



							<div class=" col-xs-6 col-sm-4 col-md-3 col-lg-2">
							<a href="{{ url('listar/algudoeira')}}"><img class="dash-image" src="/imgs/lista-algodoeiras.png" style="max-height: 200px;"></a>
                              
							</div>


							<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
								<a href="{{ url('/listar/laboratorio') }}"><img src="/imgs/lista-laboratorios.png" style="max-height: 200px;"></a>
							</div>

							<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
								<a href="{{ url('/listar/grafica') }}"><img src="/imgs/lista-graficas.png" style="max-height: 200px;"></a>
           
							</div>

								<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
								<a href="{{ url('/listar/fabricas') }}"><img src="/imgs/lista-fabricss.png" style="max-height: 200px;"></a>
           
							</div>
							
							
						</div>	
					
						</div> 
					</div>
				</div>
			</div>
	
		
		

		</div>
	</div>

@endsection 

