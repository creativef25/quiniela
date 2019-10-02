<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
@section('headerQ')
  @include('layout.partials.headerq')
@show

  <body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="{{ asset('principal/images/ie8-panel/warning_bar_0000_us.jpg')}}" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div id="preloader">
      <div class="preloader-body">
        <div class="preloader-item"></div>
      </div>
    </div>
    <!-- Page-->
    <div class="page">
      <!-- Page Header-->
      @section('menuQ')
        @include('layout.partials.menuq')
      @show

      @yield('containerF')

      <!-- Page Footer-->
      @section('footerQ')
        @include('layout.partials.footerq')
      @show
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    @section('scriptQ')
      @include('layout.partials.scriptq')
    @show

  </body>
</html>
