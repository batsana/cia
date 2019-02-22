@extends('master')
@section('content')

<div class="breadcomb-area">
		<div class="container" style="border: 1px solid #79b85e; max-width: 1090px;">
			<div class="row">
				{{-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> --}}
					<div class="breadcomb-list">
						<div class="row">


						

							<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
							<a href="{{ url('gestao/entidade') }}"><img class="dash-image" src="imgs/gestao_entidades.png" style="max-height: 200px;"></a>
                              
							</div>



							<div class=" col-xs-6 col-sm-4 col-md-3 col-lg-2">
								<div style="position: absolute; background-color: #fa3e3e; border-radius: 4px; min-width: 20px; min-height: 20px; margin-top: 10px; margin-left: 75px;">
								<span style="display: inline-block; max-height: 20px; margin-left: 25%; color:#fff; font-weight: bold;">{{$var}}
								</span>
								</div>

							<a href="{{ url('listar/et')}}"><img class="dash-image" src="imgs/gestao_etiquetas.png" style="max-height: 200px;"></a>
                              
							</div>

							<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
								<a href="{{ url('listar/classes') }}"><img src="imgs/classific_visual.png" style="max-height: 200px;"></a>
							</div>
							
							<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
								<a href="{{ url('gestao/cetificate') }}"><img src="imgs/cert-orgiem-classif.png" style="max-height: 200px;"></a>
           
							</div>

								<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
								<a href="{{ url('listar/iam') }}"><img src="imgs/IAM-provincial.png" style="max-height: 200px;"></a>
           
							</div>
						
							<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
								<a href="{{ url('listar/classesh') }}"><img src="imgs/classif-por-HVI.png" style="max-height: 200px;"></a>
           
							</div>
							
						</div>	<div class="row">



							<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
							<a title="Gestão de Entidades" href="{{ url('gestao/contratos') }}"><img src="imgs/gestao_contratos.png" style="max-height: 200px;"></a>
                              
							</div>



							<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
							<a href="{{ url('faturas') }}"><img src="imgs/gestao_facturas.png" style="max-height: 200px;"></a>   
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
		</div>
	</div>

@endsection 

