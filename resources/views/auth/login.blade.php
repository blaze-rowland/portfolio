@extends('layouts.admin')

@section('content')
  <div id="container">
    <div class="admin-form">
      <form method="POST" action="{{ route('login') }}">
        <div class="top">
        <img class="form-img" src="{{ asset('/img/bg/nature.jpg') }}" alt="">
        <h1 class="text-center">Login</h1>
        </div>
        <div class="body">
          @csrf
          <label for="email">E-Mail</label>
          <input class="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
          @if ($errors->has('email'))
            {{ $errors->first('email') }}
          @endif

          <label for="password">Password</label>
          <input class="password" type="password" name="password" required>
          @if($errors->has('password'))
            {{ $errors->first('password') }}
          @endif

          <label>
            <input class="check" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
          </label>

          <input class="btn-submit" type="submit" value="Login">
          <a href="{{ route('password.request') }}">Forgot Password?</a>
        </div>
      </form>
    </div>
  </div>
@endsection


{{-- <form method="POST" action="{{ route('login') }}">
    @csrf
  <label for="email" class="col-sm-4 col-form-label text-md-right">E-Mail Address</label>
    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
      @if ($errors->has('email'))
              {{ $errors->first('email') }}
      @endif

  <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
      @if ($errors->has('password'))
          <span class="invalid-feedback">
              <strong>{{ $errors->first('password') }}</strong>
          </span>
      @endif

  <label>
      <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
  </label>

  <button type="submit" class="btn btn-primary">
      Login
  </button>

  <a class="btn btn-link" href="{{ route('password.request') }}">Forgot Your Password?</a>
</form> --}}
