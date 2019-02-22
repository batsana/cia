@extends('master')
@section('content')


<div class="breadcomb-area">
		<div class="container branco" style="border: 1px solid #79b85e; max-width: 1090px;">
			<div class="row">
				{{-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> --}}
					<div class="breadcomb-list">
						<div class="row">



							<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
							<a title="Geracao dos Contratos " href="{{ url('ger/cont') }}"><img class="dash-image" src="/imgs/gestao_contratos.png" style="max-height: 200px;"></a>
                              
							</div>

							<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
							<a title="Listas de Resultados da classificacao por M/V" href="{{ url('/listar/classess') }}"><img class="dash-image" src="/imgs/resultados-classif.png" style="max-height: 200px;"></a>
                              
							</div>

							<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
							<a title="Listas de Resultados da classificacao por HVI" href="{{ url('/listar/classeshs') }}"><img class="dash-image" src="/imgs/classif-por-HVI.png" style="max-height: 200px;"></a>
                              
							</div>
							{{-- <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2"> --}}
							<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
								<a href="{{ url('gerar/esquema') }}"><img src="/imgs/geracao-esq-embarque.png" style="max-height: 200px;"></a>
           
							{{-- </div> --}}
                              
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
						<div class="row">
							<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
							<a title="Gestão de Entidades" href="{{ url('lista/esquema') }}"><img class="dash-image" src="/imgs/lista-equemas-embarque.png" style="max-height: 200px;"></a>
                              
							</div>
						</div>
					
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection 

