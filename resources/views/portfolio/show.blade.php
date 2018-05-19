@extends('layouts.app')
@section('content')

  @if(session('status'))
    <div class="alert alert-success">
      {{ session('status') }}
    </div>
  @endif
  @include('partials._appNav')

  <div class="portfolio">
    <div class="portfolio__hero" style='background-image: linear-gradient(to bottom right, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url("{{ asset('img/portfolio/' . $portfolio->cover_image) }}")'>
      <h1 class="heading-primary">
        {{ $portfolio->title }}
      </h1>
    </div>

    <div class="container portfolio__body">
      <h2 class="heading-secondary heading-secondary--work m-bottom--sm">
        {{ $portfolio->title }}
      </h2>

      <h3 class="heading-tertiary">Description</h3>
      <p>{{ $portfolio->body }}</p>

      <hr>

      @if($portfolio->design_body) 
        <h4 class="heading-quaternary">Design Phase</h4>
        <p>{{ $portfolio->design_body }}</p>
      @endif
    </div>
  </div>

@stop