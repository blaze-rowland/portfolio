@extends('layouts.admin')
@section('content')
  <div class="container container--blog">
    <section id="blog" class="blog">
      <img class="blog__image" src="{{ $post->cover_image }}" alt="{{ $post->title }}, {{ $post->cover_image }}">
      <div class="blog__body">
          <h3 class="blog__heading">
              {{ $post->title }}
          </h3>
          <p class="blog__date">
            {{ date('F jS, Y', strtotime($post->created_at)) }}
          </p>
    
          <p class="blog__text">
            {!! $post->body !!}
          </p>
      </div>
    </section>
    
    <section class="sidebar sidebar--blog">
      <h4 class="sidebar__heading">
        Recent Posts
      </h4>
      <ul class="sidebar__list">
        @foreach($blogs as $blog) 
          <li class="sidebar__item">
            <a href="{{ route('posts.show', $blog->id) }}" class="sidebar__link">{{$blog->title}}</a>
          </li>
        @endforeach
      </ul>

      <a href="{{ route('posts.index') }}" class="btn btn-block m-25">See all</a>
    </section>
  </div>
@stop
