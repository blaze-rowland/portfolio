<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Portfolio | Admin') }}</title>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
  <link type="text/css" rel="stylesheet" href="{{ asset('css/admin.css') }}">
  @yield('stylesheets')
</head>
<body>
  <nav class="nav-left">
    <ul class="links">
      <a href="#">
        <li><i class="fa fa-home"></i></li>
      </a>
      <a href="#">
        <li><i class="fa fa-credit-card-alt"></i></li>
      </a>
      <a href="#">
        <li><i class="fa fa-briefcase"></i></li>
      </a>
      <a href="#">
        <li><i class="fa fa-users"></i></li>
      </a>
      <a href="#">
        <li><i class="fa fa-calendar"></i></li>
      </a>
      <a href="#">
        <li><i class="fa fa-sticky-note"></i></li>
      </a>
      <a href="{{ url('/logout') }}">
        <li>
          <i class="fa fa-sign-out"></i>
        </li>
      </a>
    </ul>
  </nav>
  @yield('content')

  <script type="text/javascript" src="{{ asset('js/admin.js') }}"></script>
  @yield('scripts')
</body>
</html>
