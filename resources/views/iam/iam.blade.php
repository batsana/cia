{{-- @extends('layouts.index') --}}
@extends('master')
@section('content')

<div class="breadcomb-area">
    <div class="container branco" style="border: 1px solid #79b85e; max-width: 1090px;">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="breadcomb-list">
            <h1>O IAM nas Províncias</h1>
            @if($entidade->count() > 0)
              @if (session('resultado'))
              <div class="alert alert-success" id="message">
              {{ session('resultado') }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button>
               </div>
             @endif
          
                <div class="table-responsive">
              <table class="table table-sc-ex">
                
              <thead>
                    <tr>
                    <th>IAM Provincial</th>
                    <th>Província</th>
                    
                    <th>Telefone</th>
                    <th>Endereço</th>
                    
                     <th>Opções</th>
                      </tr>
              </thead>
                <tbody>
                @foreach($entidade as $fab)
              
                <td>{{$fab->name}}</td>
                 <td>{{$fab->provincia}}</td>
              
                 <td>{{$fab->telefone}}</td>
                <td>{{$fab->endereco}}</td> 

                           
                <td> <a href="{{ url('/atualiam/'.$fab->id.'/editiam')}}" class="button-alt grayb">Editar</a>
   
               {{-- <a href="/apagariam/{{$fab->id}}" class="button-alt">X</a> --}}
             </td>

              </tr>
                @endforeach
         
           </tbody>
        </table>
        <h5 class="text-center">{{ $entidade->links() }}</h5>

      </div>
       @else

                   <div class="alert alert-danger alert-dismissible id_sucesso" role="alert" id="id_sucesso" style="display: block; margin-top: 30px;">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> <strong style="align-content: center;"><h5>Não foi encontrado nenhum registo nesta categoria!</h5></strong></div>
                @endif
          <div class="row">
       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
       
            
              <div style="border-top: 1px solid #df822a; margin-top: 24px; padding-top: 10px;">
      <a  class="button-alt" style="float: right; color: #fff; margin-bottom: 15px;" href="{{ url('/home') }}">&laquo; Voltar</a>          
           
        </div>
    </div>
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
      	// setTimeout(function(){
       //          $('#message').fadeOut(7000);
       //         });

      });
      
    </script>
@endsection

