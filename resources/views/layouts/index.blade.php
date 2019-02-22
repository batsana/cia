<?php date_default_timezone_set('Africa/Maputo');?>
<html>
  {{--   @include('layouts.headCSS') --}}
    <body>
    <header>
{{--     @include('layouts.navbar') --}}
@include('master')
    </header>
  {{--   @yield('content') --}}


    @include('layouts.script')
    @yield('scripts')
    </body>
</html>