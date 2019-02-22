

 <!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SIAM - Sistema Integrado do Algodão de Moçambique</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="{!! asset('pro/img/favicon.png')!!}">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="{!! asset('pro/css/bootstrap.min.css')!!}">

 

    {{-- <link rel="stylesheet" href="{!! asset('pro/css/animate.css')!!}"> --}}
    <link rel="stylesheet" href="{!! asset('pro/css/normalize.css')!!}">
    {{-- <link rel="stylesheet" href="{!! asset('pro/css/scrollbar/jquery.mCustomScrollbar.min.css')!!}">
    <link rel="stylesheet" href="{!! asset('pro/css/jvectormap/jquery-jvectormap-2.0.3.css')!!}">
    <link rel="stylesheet" href="{!! asset('pro/css/notika-custom-icon.css')!!}">
    <link rel="stylesheet" href="{!! asset('pro/css/wave/waves.min.css')!!}"> --}}
    <link rel="stylesheet" href="{!! asset('pro/css/main.css')!!}">
    <link rel="stylesheet" href="{!! asset('pro/style.css')!!}">
    <link rel="stylesheet" href="{!! asset('pro/css/responsive.css')!!}">
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
        <div class="container" style="border: 1px solid #79b85e; max-width: 1090px;">
      <form novalidate class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
    {{-- <div class="login-content"> --}}
        <!-- Login -->


        <div class="nk-block toggled" id="l-login">

   <h1 style="margin-left: 30%; padding-bottom: 0px; border-bottom:0">Iniciar Sessão</h1>
            <div class="nk-form intro" style="margin-bottom: 20px;">
                

                <div class="input-group">
                    <span class="input-group-addon nk-ic-st-pro"></span>
                    <div class="nk-int-st">

                        <input id="email" type="text" name="email" class="form-control" placeholder="Endereco de Email" value="{{ old('email') }}" required autofocus>
                         @if ($errors->has('email'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                        @endif
                    </div>
                </div>

                <div class="input-group mg-t-15">
                    <span class="input-group-addon nk-ic-st-pro"></span>
                    <div class="nk-int-st">
                        <input type="password" id="password" class="form-control" placeholder="Password" name="password" required>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="fm-checkbox">
                    
                </div>
            {{--       <button type="submit" class="btn btn-block ">Entrar</button> --}}
                <button type="submit"  href="#l-register" data-ma-action="nk-login-switch" data-ma-block="#l-register" class="btn btn-login btn-success btn-float"><i class="nextb" ></i></button>
            </div>
 
          {{--   <div style="padding-top: 10px;">
               <span>É comprador? Pesquise <i>Resultados de Classificação</i>  <a class="link-geral" href="{{ url('come') }}">aqui</a>.</span></a>
               
            </div> --}}
        </div>
    </form>
    
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





{{--     <script src="{{asset('pro/js/vendor/jquery-1.12.4.min.js')}}"></script>  
    <script src="{{asset('pro/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('pro/js/wow.min.js')}}"></script>
    <script src="{{asset('pro/js/jquery-price-slider.js')}}"></script>
    <script src="{!! asset('js/jquery-3.3.1.min.js')  !!}"></script>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('pro/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('pro/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('pro/js/meanmenu/jquery.meanmenu.js')}}"></script>
    <script src="{{asset('pro/js/counterup/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('pro/js/counterup/waypoints.min.js')}}"></script>
    <script src="{{asset('pro/js/counterup/counterup-active.js')}}"></script>
    <script src="{{asset('pro/js/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('pro/js/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{asset('pro/js/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('pro/js/jvectormap/jvectormap-active.js')}}"></script>
    <script src="{{asset('js/sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('js/sparkline/sparkline-active.js')}}"></script>
    <script src="{{asset('pro/js/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('pro/js/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('pro/js/flot/curvedLines.js')}}"></script>
    <script src="{{asset('pro/js/flot/flot-active.js')}}"></script>
    <script src="{{asset('pro/js/knob/jquery.knob.js')}}"></script>
    <script src="{{asset('pro/js/knob/jquery.appear.js')}}"></script>
    <script src="{{asset('pro/js/knob/knob-active.js')}}"></script>
    <script src="{{asset('pro/js/wave/waves.min.js')}}"></script>
    <script src="{{asset('pro/js/wave/wave-active.js')}}"></script>
    <script src="{{asset('pro/js/todo/jquery.todo.js')}}"></script>
    <script src="{{asset('pro/js/plugins.js')}}"></script>
    <script src="{{asset('pro/js/chat/moment.min.js')}}"></script>
    <script src="{{asset('pro/js/chat/jquery.chat.js')}}"></script>
    <script src="{{asset('pro/js/main.js')}}"></script>
    <script src="{{asset('js/tawk-chat.js')}}"></script> --}}
</body>

</html>  