@extends('master')
@section('content')


<div class="breadcomb-area">
		<div class="container branco" style="border: 1px solid #79b85e; max-width: 1090px;">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="breadcomb-list">

						<div class="row">


							<div class=" col-xs-6 col-sm-4 col-md-3 col-lg-2">
							<a href="{{ url('listar/etiqueta')}}"><img class="dash-image" src="/imgs/etiquetas-requisitadas.png" style="max-height: 200px;"></a>
                              
							</div>

							<div class=" col-xs-6 col-sm-4 col-md-3 col-lg-2">
							<a href="{{ url('listar/proce')}}"><img class="dash-image" src="/imgs/etiquetas-processadas.png" style="max-height: 200px;"></a>
                              
							</div>
							
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection 
