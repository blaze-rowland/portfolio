@extends('layouts.admin')
@section('content')
  <div id="container">
    <section id="admin">
      <h1 class="inline">Blog</h1>
      <pre class="header-aside"><a href="{{route('posts')}}">Home</a> / {{ $post->title }}</pre>
      <div class="card-grid m-25">
          <div class="card full">
            <div class="img">
              <img class="top" src="{{ $post->cover_image }}" alt="">
              <span>{{ $post->title }}</span>
            </div>
            <div class="body">
                <div class="title"><i class="fa fa-user"></i> {{ $post->user->name }}</div>
                <pre class="float-right"><i class="fa fa-calendar-o"> </i>{{ date('F j, Y', strtotime($post->created_at)) }}</pre>
                <div class="text">{!! $post->body !!}</div>
            </div>
          </div>
      </div>
    </section>
  </div>
@stop
