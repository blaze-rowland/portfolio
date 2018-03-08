@extends('layouts.email')
@section('styles')
  html,body,h2{font-family:arial, sans-serif;margin:0;padding:0;}
  .header {box-shadow: 0 1px 16px -5px rgba(0, 0, 0, 0.4); width: 100%; background: rgb(57, 57, 57); color: #fff;}
  .header h2{padding: 50px 25px;}
  .container{width: 95%; margin: 50px auto;}
  .email-body{line-height: 1.6; width: 50rem;}
  @media(max-width: 825px) {.email-body {width: 35rem;}}
  @media(max-width: 590px) {.email-body {width: 30rem;}}
  @media(max-width: 500px) {.email-body {width: 25rem;}}
  @media(max-width: 425px) {.email-body {width: 20rem;}}
  @media(max-width: 320px) {.email-body {width: 100%;}}
@stop
@section('content')
  <div class="header">
    <h2>New Client Alert</h2>
  </div>
  <div class="container">
      <p><strong>From:</strong></p>
      <p>{{ $name }} ({{ $email }})</p>
      <br>
      <p><strong>Body:</strong></p>
      <div class="email-body">
        <p>{{ $bodyMessage }}</p>
      </div>

  </div>
@stop
