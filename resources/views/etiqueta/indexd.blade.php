
@extends('master')
@section('content')


<div class="breadcomb-area">
		<div class="container branco" style="border: 1px solid #79b85e; max-width: 1090px;">
			<div class="row">

				{{-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> --}}
					<div class="breadcomb-list">
						<div class="row">



							<div class=" col-xs-6 col-sm-4 col-md-3 col-lg-2">
								<div style="position: absolute; background-color: #fa3e3e; border-radius: 4px; min-width: 20px; min-height: 20px; margin-top: 10px; margin-left: 75px;">
								  <span style="display: inline-block; max-height: 20px; margin-left: 25%; color:#fff; font-weight: bold;">{{$var}}
								</span>
								</div>

							<a href="{{ url('ver/etiqueta')}}"><img class="dash-image" src="imgs/baixar-etiquetas.png" style="max-height: 200px;"></a>
                              
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