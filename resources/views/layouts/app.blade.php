<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  @include('partials._meta')
  <title>{{ config('app.name', 'Portfolio') }}</title>
  @include('partials._vendors')
  <link type="text/css" rel="stylesheet" href="{{ asset('css/app.css') }}">
  @yield('stylesheets')
</head>
<body>
    @include('partials._coverLoad')
    @yield('content')

  <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
  @yield('scripts')
</body>
</html>
