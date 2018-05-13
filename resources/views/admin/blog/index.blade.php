@extends('layouts.admin')
@section('stylesheets')
<link rel="stylesheet" href="{{asset('css/app.css')}}">
@stop
@section('content')
  <div id="container">
    <h1 class="heading-tertiary">Blog</h1>
      <section>
        <div class="container container--blog">
            @foreach($posts as $post) 
            <div class="blog__box"> 
                @if(Auth::check())
                <a href="/posts/{{$post->id}}">
                @else
                <a href="{{Route('posts.show', $post->id)}}">
                @endif
                    <img src="{{ $post->cover_image }}" alt="Blog 1" class="blog__img">

                    <div class="blog__inner">
                        <p class="blog__date">{{ date('F jS, Y', strtotime($post->created_at)) }}</p>
                        <h5 class="blog__title heading-quinary">{{ str_limit($post->title, $limit = 30, $end = '...') }}</h5>
                        <p class="blog__snip paragraph">{{ strip_tags(str_limit($post->body, $limit = 150, $end = '...')) }}</p>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </section>
  </div>
@stop
