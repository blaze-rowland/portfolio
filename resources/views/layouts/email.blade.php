<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  @include('partials._meta')
  <style>
    @yield('styles')
  </style>
</head>
<body>
  @yield('content')
</body>
</html>
