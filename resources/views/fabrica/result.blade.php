@extends('master')
@section('content')


<div class="breadcomb-area">
		<div class="container branco" style="border: 1px solid #79b85e; max-width: 1090px;">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="breadcomb-list">
						
						<div class="row">
							<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
							<a title="Lista de Amostras Enviadas para a classificação" href="{{ url('resultado/classificacao') }}"><img class="dash-image" src="/imgs/listas-classif.png" style="max-height: 200px;"></a>
                              
							</div>
							<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
							<a title="Resultados de Classificação por HVI" href="{{ url('listar/classeshs') }}"><img class="dash-image" src="/imgs/classif-por-HVI.png" style="max-height: 200px;"></a>
                              
							</div>


							
							{{-- <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
							<a title="Gestão de Entidades" href="{{ url('lista/esquema') }}"><img class="dash-image" src="/imgs/lista-equemas-embarque.png" style="max-height: 200px;"></a>
                              
							</div> --}}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection 

