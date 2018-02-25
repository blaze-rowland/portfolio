@extends('layouts.admin')

@section('content')

    <div id="container">
      <div class="admin-form">
        <form method="POST" action="{{ route('register') }}">
          <h1 class="text-center">Register</h1>
          @csrf
          <label for="name">Name:</label>
          <input class="name" type="text" name="name" value="{{ old('name') }}" required autofocus>

          <label for="email">E-Mail</label>
          <input class="email" type="email" name="email" value="{{ old('email') }}" required>

          <label for="password">Password</label>
          <input class="password" type="password" name="password" required>

          <label for="password_confirmation">Confirm Password</label>
          <input class="password" type="password" name="password_confirmation" required>

          <input class="btn-submit" type="submit" value="Register">
          <a href="{{ route('login') }}">Sign In?</a>
        </form>
      </div>
        <div class="errors">
          @if ($errors->has('name')))
            <div class="form-error">
              {{ $errors->first('name') }}
            </div>
          @endif
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
