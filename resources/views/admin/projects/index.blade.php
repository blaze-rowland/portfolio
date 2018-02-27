@extends('layouts.admin')
@if(Auth::check())
  @include('partials._adminNav')
@else
  <div class="back-button">
    <a href="{{ route('/') }}">  <i class="fa fa-arrow-left"></i> </a>
  </div>
@endif
@section('content')
  <div id="container">
    <section id="blog">
      <h1>Projects</h1>
      <div class="card-grid">
        @for ($i = 1; $i < 25; $i++)
          <div class="card alone">
            <div class="type text-center">
              <i class="fa fa-paint-brush"></i> Design
            </div>
            <div class="body">
                <div class="title upper">test</div>
                <pre class="float-right"><i class="fa fa-calendar-o"> </i> February 26th, 2018</pre>
                <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi nesciunt odio delectus suscipit assumenda. Vero omnis ipsam fugiat, recusandae rem voluptatibus illum.</div>
                <a href="#" class="btn btn-admin">View</a>
            </div>
          </div>
        @endfor
      </div>
    </section>
  </div>
@stop
