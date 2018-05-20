<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  @include('partials._meta')
  @yield('title')
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  @include('partials._vendors')
  <link type="text/css" rel="stylesheet" href="{{ asset('css/app.css') }}">
  @yield('stylesheets')
</head>
<body>
  @yield('content')

  <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
  @yield('scripts')
</body>
</html>
