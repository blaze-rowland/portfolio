
    @extends('layouts.app')
    @section('title')
    <title>Blog</title>
    @stop
    @section('meta_data')
    <meta name="description" content="Blog Posts for Updates on Personal Projects and New Trends in the Tech Industry.">
    @stop
    @section('content')

    @if(session('status'))
        <div class="alert alert-success">
        {{ session('status') }}
        </div>
    @endif
    @include('partials._appNav')
    
        <section id="about--page" class="about--page" style="min-height: 100vh;">
            <div class="container">
            <h1 class="heading-primary p-top--md">
                Blog.
            </h1>
            <div class="w-75--flexible">
                @if(Auth::check())
                <h3 class="heading-tertiary">
                    <a class="link--plain" href="{{ route('posts.create') }}">Add</a>
                </h3>
                @endif
                <p class="paragraph">
                    I'm very involved in my work; I love creating blog posts for my clientele and fellow developers. Here I'll share updates on personal projects, and new trends in the industry. 
                </p>
            </div>
            </div>
            <div class="container m-top--md container--blog">
                @foreach($posts as $post) 
                <div class="blog__box">
                    <a href="{{ route('posts.show', $post->id) }}">
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
    @stop

