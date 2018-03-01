@extends('layouts.admin')
@section('content')
  <div id="container">
    <section id="admin">
      <h1>Blog</h1>
      <div class="card-grid">
        @foreach ($posts as $post)
          <div class="card alone">
            <div class="img">
              <img class="top" src="{{ $post->cover_image }}" alt="">
              <a title="{{$post->title}}" class="title-banner" href="/posts/{{$post->id}}"><span>{{ str_limit($post->title, $limit = 40, $end = '...') }}</span></a>
            </div>
            <div class="body">
                <div class="title"><i class="fa fa-user"></i> {{ $post->user->name }}</div>
                <pre class="float-right"><i class="fa fa-calendar-o"> </i> {{ date('F jS, Y', strtotime($post->created_at)) }}</pre>

                <div class="text">{{ strip_tags(str_limit($post->body, $limit = 225, $end = '...')) }}</div>
                @if(Auth::check())
                  <a href="/posts/{{$post->id}}" class="btn btn-admin">Read More</a>
                @else
                  <a href="{{Route('posts.show', $post->id)}}" class="btn">Read More</a>
                @endif
            </div>
          </div>
        @endforeach
      </div>
    </section>
  </div>
@stop
