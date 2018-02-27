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

          <label for="password">Password</label>
          <input class="password" type="password" name="password" required>

          <label>
            <input class="check" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
          </label>

          <input class="btn-submit" type="submit" value="Login">
          <a href="{{ route('password.request') }}">Forgot Password?</a>
        </div>
      </form>
    </div>
      <div class="errors">
        @if ($errors->has('email'))
          <div class="form-error">
            {{ $errors->first('email') }}
          </div>
        @endif
        @if ($errors->has('password'))
          <div class="form-error">
            {{ $errors->first('password') }}
          </div>
        @endif
      </div>
  </div>
@endsection
