<html>
    @include('layouts.headCSS')
    <body class="skin-black">
        <header class="header">
             @include('layouts.navbar')
        </header>

        <aside class="left-side sidebar-offcanvas ">
            <div class="full-reset container-menu-movile custom-scroll-containers ">
                <div class="full-reset nav-lateral-list-menu">
                    <ul class="list-unstyled">
                        <li><a href=""><i class="zmdi zmdi-home zmdi-hc-fw"></i>&nbsp;&nbsp; Inicio</a></li>
                        <li id="butMessage"><a href="{{url('/')}}"><i class="zmdi zmdi-accounts zmdi-hc-fw"></i>&nbsp;&nbsp; Contactos</a></li>
                        <li id="butMessage"><a href="{{url('/novo')}}"><i class="zmdi zmdi-accounts-add zmdi-hc-fw"></i>&nbsp;&nbsp; Novo</a></li>
                    </ul>
                </div>
            </div>
        </aside>

        <aside class="right-side" style="margin-top: 3em;">
            <section class="content">
                <div class="container-fluid" >
                    <div class="allContacto">
                    @yield('content')
                    </div>
                </div>
            </section>
        </aside>
    </body>
</html>