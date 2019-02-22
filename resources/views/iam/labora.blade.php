{{-- @extends('layouts.index') --}}
@extends('master')
@section('content')

   <div class="breadcomb-area">
    <div class="container branco" style="border: 1px solid #79b85e; max-width: 1090px;">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="breadcomb-list">
            <h1>Lista de Laboratorio</h1>
              <div class="table-responsive">
                   <table class="table table-sc-ex">
              <thead>
                    <tr>
                    <th>Nome do Laboratório</th>
               {{--      <th>Numero</th> --}}
                    
                    <th>Telefone</th>
                    <th>Endereço</th>
                    
                     <th>Opções</th>
                      </tr>
              </thead>
                <tbody>
                @foreach($entidade as $fab)
              
                <td>{{$fab->name}}</td>
         {{--         <td>{{$fab->numerunico}}</td> --}}
              
                 <td>{{$fab->telefone}}</td>
                <td>{{$fab->endereco}}</td> 

                           
                <td> <a href="{{ url('/atualaboratorio/'.$fab->id.'/editadolab')}}" class="button-alt grayb">Editar</a>
   
              {{--  <a href="/apagarlaboratorio/{{$fab->id}}" class="button-alt">X</a> --}}

                <a href="{{ url ('/apagarlaboratorio/'.$fab->id.'apagar') }}" ><button  class="button-alt">X</button></a>
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
  </div>
@endsection

