{{-- @extends('layouts.index') --}}
@extends('master')
@section('content')


  {{-- ?////////////////////////////////////////////////////////////////////////////// --}}

   {{-- <div class="form-example-area"> --}}

     <div class="breadcomb-area">
    <div class="container branco" style="border: 1px solid #79b85e; max-width: 1090px;">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <h1 style="padding-top: 20px;"> Etiquetas Recebidas</h1>
              <div class="table-responsive">
                   <table class="table table-sc-ex">
              <thead>
                    <tr>
                    <th>Tipo de Etiqueta</th>
                    <th>Quantidade</th>
                   {{--  <th>Situacao</th> --}}
                    <th>Data de actualização</th>
                     <th>Fábrica de Origem</th>
                     {{-- <th>Gráfica Seleccionada</th> --}}
                     <th>Técnico Responsável</th>
                     <th>Opções</th>
                
              </thead>
                <tbody>
                @foreach( $classes as $clas)
              
                <td>{{$clas->tipoet}}</td>
                <td>{{$clas->quantidade}}</td>                           
                 <td>{{$clas->updated_at}}</td> 
                           
                 <td>{{$clas->name}}</td>  
                 <td>{{$clas->tecres}}</td> 
                 {{-- <td>{{$clas->estado}}</td> --}}
               

              
                   <td> 
                        <a target='_blank' href="{{ url('/impressaobom/'.$clas->id)}}" class="button-alt grayb" >Baixar Informação</a>
                       <a target='_blank' href="{{ url('/pdf/'.$clas->pdfs)}}" class="button-alt grayb" >Baixar PDF</a>

                        
                      
                    </td>

                 </tr>
                @endforeach
         
                </tbody>
           </table>

             </div>
        
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
@section('scripts')
    <script>
        $(document).ready(function() {

    
        });
    </script>
@endsection
