{{-- @extends('layouts.index') --}}
@extends('master')
@section('content')

<div class="breadcomb-area">
    <div class="container branco" style="border: 1px solid #79b85e; max-width: 1090px;">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="breadcomb-list">
            <h1>Iam nas Provicias</h1>
              @if (session('resultado'))
              <div class="alert alert-success" id="message">
              {{ session('resultado') }}
               </div>
             @endif
          
                <div class="table-responsive">
              <table class="table table-sc-ex">
                
              <thead>
                    <tr>
                    <th>Iam Provincial</th>
                    <th>Provincia</th>
                    
                    <th>Telefone</th>
                    <th>Endereco</th>
                    
                     <th>Opcoes</th>
                      </tr>
              </thead>
                <tbody>
                @foreach($entidade as $fab)
              
                <td>{{$fab->name}}</td>
                 <td>{{$fab->provincia}}</td>
              
                 <td>{{$fab->telefone}}</td>
                <td>{{$fab->endereco}}</td> 

                           
                <td> <a href="{{ url('/atualiam/'.$fab->id.'/editiam')}}" class="button-alt grayb">Editar</a>
   
               <a href="/apagariam/{{$fab->id}}" class="button-alt">X</a>
             </td>

              </tr>
                @endforeach
         
           </tbody>
        </table>
        <h5 class="text-center">{{ $entidade->links() }}</h5>

      </div>
      </div>
    </div>
  </div>
    </div>  
    </div>
  </div>
@endsection
@section('script')
 <script  type="text/javascript">

      $(document).ready(function(){
      	setTimeout(function(){
                $('#message').fadeOut(7000);
               });

      });
      
    </script>
@endsection

