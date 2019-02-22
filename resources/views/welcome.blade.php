

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SIAM - Sistema Integrado do Algodão de Moçambique | Pesquisa de Fardos</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->

   
    <!-- favicon
        ============================================ -->

    <link rel="shortcut icon" type="image/png" href="{!! asset('pro/img/favicon.png')!!}">
    <!-- Google Fonts
        ============================================ -->
   
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="{!! asset('pro/css/bootstrap.min.css')!!}">
    <!-- Bootstrap CSS
        ============================================ -->
   {{--  <link rel="stylesheet" href="{!! asset('pro/css/font-awesome.min.css')!!}"> --}}
    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="{!! asset('pro/css/owl.carousel.css')!!}">
    <link rel="stylesheet" href="{!! asset('pro/css/owl.theme.css')!!}">
    <link rel="stylesheet" href="{!! asset('pro/css/owl.transitions.css')!!}">
    <!-- meanmenu CSS
        ============================================ -->
    <link rel="stylesheet" href="{!! asset('pro/css/meanmenu/meanmenu.min.css')!!}">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="{!! asset('pro/css/animate.css')!!}">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="{!! asset('pro/css/normalize.css')!!}">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="{!! asset('pro/css/scrollbar/jquery.mCustomScrollbar.min.css')!!}">
    <!-- jvectormap CSS
        ============================================ -->
    <link rel="stylesheet" href="{!! asset('pro/css/jvectormap/jquery-jvectormap-2.0.3.css')!!}">
    <!-- notika icon CSS
        ============================================ -->
    <link rel="stylesheet" href="{!! asset('pro/css/notika-custom-icon.css')!!}">
    <!-- wave CSS
        ============================================ -->
    <link rel="stylesheet" href="{!! asset('pro/css/wave/waves.min.css')!!}">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="{!! asset('pro/css/main.css')!!}">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="{!! asset('pro/style.css')!!}">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="{!! asset('pro/css/responsive.css')!!}">
    <!-- modernizr JS
        ============================================ -->
    <script src="{{asset('pro/js/vendor/modernizr-2.8.3.min.js')}} "></script>
</head>

<body>

  <div class="header-top-area">
        <div class="container">
            <div class="row" style="border-bottom: solid #79b85e;max-width: 1090px; position: relative">
                <div class="login-area-second" style="position: absolute; z-index: 1000000; right: 0;">
                
                 </div>
                     <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"  style="padding: 0 0 5px 0;">
                         <div class="logo-aread">
                            <a title="Página Inicial" href="{{'/home'}}"> <img src="/imgs/logo-SIAM.png" style="max-height: 500px;" /></a>
                        </div> 
                    </div>
           </div>
    </div>
</div>
 <div class="breadcomb-area">
    <div class="container branco" style="border: 1px solid #79b85e; max-width: 1090px;">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="breadcomb-list">
            <h1>Fardos Comercializados</h1>
              <div class="table-responsive" style="overflow: hidden">
                   <table class="table table-sc-ex">
 
                <div class="row">
                    <div class="col-md-5 col-lg-5 col-sm-12">
                <input type="text" id="txt" name="lote" class="form-control" placeholder="Pesquisar por qualquer coluna" style="width: 100%;"> 
                </div>
              
          
                </div>
                
            
          
              <thead>
                    <tr>
                    <th>Nr. do Fardo</th>
                    <th>Lote</th>
                   

                     <th>Tipo de Algodão</th>
                     <th>Comprimento</th>
                     <th>Fábrica de Origem</th>
                     <th>Laboratório Dest.</th>
                     <th>Estado</th>
                     
                 
                
              </thead>
                <tbody id="tabela">
                @foreach( $qualify as $clas)
              
                <td>{{$clas->numerofardo}}</td>
                <td>{{$clas->lote}}</td>
                 {{-- <td>{{$clas->barcod}}</td>     --}}    
                <td>{{$clas->tipo}}</td>
                <td>{{$clas->comprimento}}</td>
                <td>{{$clas->nome}}</td>
                <td>{{$clas->name}}</td>
                <td>{{$clas->estado}}</td>
                
               

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
   
  





      <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-copy-right">
                        <p>Copyright © 2019 - 
Todos os direitos reservados - <a href="http://www.iam.gov.mz">IAM</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
  



  

      {{-- ============================================ --> --}}
    <script src="{{asset('pro/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="{{asset('pro/js/bootstrap.min.js')}}"></script>
    <!-- wow JS
        ============================================ -->
    <script src="{{asset('pro/js/wow.min.js')}}"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src="{{asset('pro/js/jquery-price-slider.js')}}"></script>
    {{-- <script type="text/javascript" src="{!! asset('js/bootstrap.js')  !!}"></script> --}}
{{-- <script src="{{asset('js/main.js')}}"></script> --}}

<script  src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="{{asset('pro/js/owl.carousel.min.js')}}"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="{{asset('pro/js/jquery.scrollUp.min.js')}}"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="{{asset('pro/js/meanmenu/jquery.meanmenu.js')}}"></script>
    <!-- counterup JS
        ============================================ -->
    <script src="{{asset('pro/js/counterup/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('pro/js/counterup/waypoints.min.js')}}"></script>
    <script src="{{asset('pro/js/counterup/counterup-active.js')}}"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="{{asset('pro/js/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <!-- jvectormap JS
        ============================================ -->
    <script src="{{asset('pro/js/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{asset('pro/js/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('pro/js/jvectormap/jvectormap-active.js')}}"></script>
    <!-- sparkline JS
        ============================================ -->
    <script src="{{asset('js/sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('js/sparkline/sparkline-active.js')}}"></script>
    <!-- sparkline JS
        ============================================ -->
    <script src="{{asset('pro/js/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('pro/js/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('pro/js/flot/curvedLines.js')}}"></script>
    <script src="{{asset('pro/js/flot/flot-active.js')}}"></script>
    <!-- knob JS
        ============================================ -->
    <script src="{{asset('pro/js/knob/jquery.knob.js')}}"></script>
    <script src="{{asset('pro/js/knob/jquery.appear.js')}}"></script>
    <script src="{{asset('pro/js/knob/knob-active.js')}}"></script>
    <!--  wave JS
        ============================================ -->
    <script src="{{asset('pro/js/wave/waves.min.js')}}"></script>
    <script src="{{asset('pro/js/wave/wave-active.js')}}"></script>
    <!--  todo JS
        ============================================ -->
    <script src="{{asset('pro/js/todo/jquery.todo.js')}}"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="{{asset('pro/js/plugins.js')}}"></script>
    <!--  Chat JS
        ============================================ -->
    <script src="{{asset('pro/js/chat/moment.min.js')}}"></script>
    <script src="{{asset('pro/js/chat/jquery.chat.js')}}"></script>
    <!-- main JS
        ============================================ -->
    <script src="{{asset('pro/js/main.js')}}"></script>
    <!-- tawk chat JS   
        ============================================ -->
    <script src="{{asset('js/tawk-chat.js')}}"></script>

     
    <script  type="text/javascript">

      $(document).ready(function(){
         $("#txt").on("keyup", function() {
        var value = $(this).val().toLowerCase();
    $("#tabela tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });

      });
  </script>
</body>
</html>
  