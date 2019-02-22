<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SIAM - Sistema Integrado do Algodão de Moçambique</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->

    <link rel="shortcut icon" type="image/png" href="{!! asset('pro/img/favicon.png')!!}">
    <!-- Google Fonts
        ============================================ -->
   
    <!-- Bootstrap CSS
        ============================================ -->
        {{-- <link rel="stylesheet" href="{!! asset('dataTables.bootstrap.min.css')!!}"> --}}
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

     @yield('css')
</head>


<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Start Header Top Area -->

    <div class="header-top-area">
        <div class="container">
            <div class="row" style="border-bottom: solid #79b85e;max-width: 1090px; position: relative">
                <div class="login-area-second" style="position: absolute; z-index: 1000000; right: 0;">
                <div  style="float: right; margin-top: 30px;" >

                   @if($func->nome !== null)
                    <p style="margin-right: 0">Bem-vindo: <strong>{{ $func->nome}}</strong> | <a class="link-geral" style="font-weight: bold;" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sair</a>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}
                       </form>
                   </p>
                
                   @else
                   <p style="margin-right: 0">Bem-vindo: <strong>{{ Auth()->user()->name}}</strong> | <a class="link-geral" style="font-weight: bold;" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sair</a>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}
                       </form>
                   </p>
                   @endif
                
                {{--  @if ($referencia == 0)
                   <p style="margin-right: 0">Bem vindo: <strong>{{ Auth::user()->name}}</strong> | <a class="link-geral" style="font-weight: bold;" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Terminar Sessão</a>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}
                       </form></p>
                   @endif --}}



                  </div>
                 </div>
                     <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"  style="padding: 0 0 5px 0;">
                         <div class="logo-aread">
                            <a title="Página Inicial" href="{{'/home'}}"> <img src="/imgs/logo-SIAM.png" style="max-height: 500px;" /></a>
                        </div> 
                    </div>
           </div>
    </div>
</div>
  <!-- Mobile Menu start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                                <li><a data-toggle="collapse" data-target="#Charts" href="{{'/'}}">Home</a>
                               </li>

                               <!--  <li><a data-toggle="collapse" data-target="#democrou" href="#">Interface</a>
                                    <ul id="democrou" class="collapse dropdown-header-top">
                                        <li><a href="pro/animations.html">Animations</a></li>
                                        <li><a href="pro/google-map.html">Google Map</a></li>
                                        <li><a href="pro/data-map.html">Data Maps</a></li>
                                        <li><a href="pro/code-editor.html">Code Editor</a></li>
                                        <li><a href="pro/image-cropper.html">Images Cropper</a></li>
                                        <li><a href="pro/wizard.html">Wizard</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demolibra" href="#">Charts</a>
                                    <ul id="demolibra" class="collapse dropdown-header-top">
                                        <li><a href="pro/flot-charts.html">Flot Charts</a></li>
                                        <li><a href="pro/bar-charts.html">Bar Charts</a></li>
                                        <li><a href="pro/line-charts.html">Line Charts</a></li>
                                        <li><a href="pro/area-charts.html">Area Charts</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demodepart" href="#">Tables</a>
                                    <ul id="demodepart" class="collapse dropdown-header-top">
                                        <li><a href="pro/normal-table.html">Normal Table</a></li>
                                        <li><a href="pro/data-table.html">Data Table</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demo" href="#">Forms</a>
                                    <ul id="demo" class="collapse dropdown-header-top">
                                        <li><a href="pro/form-elements.html">Form Elements</a></li>
                                        <li><a href="pro/form-components.html">Form Components</a></li>
                                        <li><a href="pro/form-examples.html">Form Examples</a></li>
                                    </ul>
                                </li> -->
                               
                                       
                                       
                                        
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu end -->
  @yield('content')
<div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-copy-right">
                        <p>Copyright © 2019 - 
Todos os direitos reservados - <a href="http://www.iam.gov.mz" target="blanck">IAM</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
    <!-- End Footer area-->
    <!-- jquery
       ============================================ -->
    <script src="{{asset('pro/js/vendor/jquery-1.12.4.min.js')}}"></script>
    {{-- <script src="{{asset('dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('jquery.dataTables.min.js')}}"></script> --}}
    <!-- bootstrap JS
        ============================================ -->
    {{-- <script src="{{asset('pro/js/bootstrap.min.js')}}"></script> --}}
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
    {{-- <script src="{{asset('js/sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('js/sparkline/sparkline-active.js')}}"></script> --}}
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
    {{-- <script src="{{asset('js/tawk-chat.js')}}"></script> --}}

    @yield('script')
</body>

</html>