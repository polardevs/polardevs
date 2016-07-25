<!DOCTYPE html>
<html lang="en">
  <head>
    @include('layouts.partials.htmlheader')
    @yield('header')
  </head>
  <body id="page-top" class="@yield('classBody')">
    @include('layouts.partials.mainheader')

    @yield('main-content')

    @include('layouts.partials.footer')

    @section('scripts')
      @include('layouts.partials.scripts')
    @show
  </body>
</html>
