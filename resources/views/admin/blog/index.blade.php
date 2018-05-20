
    @extends('layouts.app')
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
                        Maecenas vehicula nibh ac viverra rhoncus. Fusce et cursus ligula, sed pharetra enim. Quisque vitae pharetra dui. Donec ac venenatis velit. Etiam vehicula felis odio, vel volutpat enim tincidunt vitae. In porttitor libero ut libero volutpat varius. Aenean pellentesque velit nec egestas ultricies. Nunc consectetur sapien sed arcu feugiat placerat.
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

