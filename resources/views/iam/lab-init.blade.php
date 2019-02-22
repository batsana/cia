@extends('master')
@section('content')


<div class="breadcomb-area">
		<div class="container branco" style="border: 1px solid #79b85e; max-width: 1090px;">
			<div class="row">
				{{-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> --}}
					<div class="breadcomb-list">
						<div class="row">



							<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
							<a title="Gestão de Entidades" href="{{ url('list/re') }}"><img class="dash-image" src="imgs/classif-amostras.png" style="max-height: 200px;"></a>
                              
							</div>
                            	@if (auth()->user()->nivel !== 1)
							<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
								<a href="{{ url('listar/classes') }}"><img src="imgs/classific_visual.png" style="max-height: 200px;"></a>
							</div>
								 @endif
							<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
								<a href="{{ url('listar/classesh') }}"><img src="imgs/classif-por-HVI.png" style="max-height: 200px;"></a>
           
							</div>

								@if (auth()->user()->nivel !== 1)
							 <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2" >
								<a href="{{ url('gerar/funcionario') }}"><img src="/imgs/registo-entidades.png" style="max-height: 200px;"></a>
                              
							</div> 

							<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2" >
								<a href="{{ url('list/funcionario') }}"><img src="/imgs/lista-funcionarios.png" style="max-height: 200px;"></a>
                              
							</div>
							 @endif



							
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection 
