@extends('master')
@section('content')


<div class="breadcomb-area">
		<div class="container branco" style="border: 1px solid #79b85e; max-width: 1090px;">
			
					
						<div class="row">



							<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
							<a title="Gestão de Entidades" href="{{ url('gestao/classificacao') }}"><img class="dash-image" src="/imgs/envio-amostras.png" style="max-height: 200px;"></a>
                              
							</div>



							<div class=" col-xs-6 col-sm-4 col-md-3 col-lg-2">
							

							<a href="{{ url('registar/etiqueta')}}"><img class="dash-image" src="/imgs/requisicoes-etiquetas.png" style="max-height: 200px;"></a>
                              
							</div>

							<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
								<a href="{{ url('resulta/iam') }}"><img src="/imgs/resultados-classif.png" style="max-height: 200px;"></a>

							</div>
						{{-- 	<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
								<a href="{{ url('gerar/esquema') }}"><img src="/imgs/geracao-esq-embarque.png" style="max-height: 200px;"></a>
           
							</div> --}}
								@if (auth()->user()->nivel !== 1)
							 <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2" >
								<a href="{{ url('gerar/funcionario') }}"><img src="/imgs/registo-entidades.png" style="max-height: 200px;"></a>
                              
							</div> 

							<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2" >
								<a href="{{ url('list/funcionariofab') }}"><img src="/imgs/lista-funcionarios.png" style="max-height: 200px;"></a>
                              
							</div>
							 @endif
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection 

