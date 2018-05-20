@extends('layouts.app')
@section('content')

  @if(session('status'))
    <div class="alert alert-success">
      {{ session('status') }}
    </div>
  @endif
  @include('partials._appNav')
  
    <section id="work--page" class="work--page">
        <div class="container">
          <h1 class="heading-primary p-top--md">
              Portfolio.
          </h1>
          <div class="w-75--flexible">
              <p class="paragraph">
                Design and Development is more than just a job for me. It's my passion; I love everything from the first proposal to the final design. There's something special about working with a client to accomplish something that not only I'm proud to create, but you're proud to call your own.
              </p>
          </div>
        </div>

        <div class="container m-top--md">
          <h3 class="heading-tertiary heading-tertiary--work">
            Services

            @if(Auth::check())
                <a style="text-decoration: none; color:black;" href="{{ route('portfolio.create') }}"> - add</a>
            @endif
          </h3>
          <p class="paragraph">
            Here are some of my favorite projects from over the years.
          </p>
        </div>
    </section>

    <section id="work work--page" class="work m-top--lg">
      <div class="container">
          <div class="work__projects">
            @foreach ($portfolios as $portfolio)
                @if($portfolio->cover_image)
                    <a href="{{ route('portfolio.show', $portfolio->id) }}">
                        <div class="work__projects-box">
                            {{-- <img src="{{ asset('img/portfolio/' . $portfolio->cover_image)}}" alt="{{ $portfolio->title . ' cover image' }}" class="work__img work__img--important"> --}}
                            <img src="{{ "http://res.cloudinary.com/blazerowland/image/upload/v1526829179/Portfolio/cover/" . $portfolio->cover_image }}" alt="{{ $portfolio->title . ' cover image' }}" class="work__img work__img--important">
                            <p class="work__text">{{ $portfolio->title }}</p>
                        </div>
                    </a>
                @endif
            @endforeach
          </div>
      </div>
      </div>
  </section>
@stop