<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  @include('partials._meta')
  @yield('title')
  @include('partials._vendors')
  <link type="text/css" rel="stylesheet" href="{{ asset('css/admin.css') }}">
  @yield('stylesheets')
  @yield('scripts_top')
</head>
<body>
  @if(Auth::check())
    @include('partials._adminNav')
  @else
    @include('partials._appNavOff')
    <div class="not-logged">
  @endif

  @yield('content')

  <script type="text/javascript" src="{{ asset('js/admin.js') }}"></script>
  @yield('scripts_bottom')
</body>
</html>
