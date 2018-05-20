@extends('layouts.app')
@section('content')

  @if(session('status'))
    <div class="alert alert-success">
      {{ session('status') }}
    </div>
  @endif
  @include('partials._appNav')

  <div class="portfolio">
    <div class="portfolio__hero" style='background-image: linear-gradient(to bottom right, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url("{{ "http://res.cloudinary.com/blazerowland/image/upload/v1526829179/Portfolio/cover/" . $portfolio->cover_image }}")'>
      <h1 class="heading-primary uppercase">
        {{ $portfolio->title }}
      </h1>
    </div>

    <div class="container portfolio__body">

      <div class="flex-container m-top--md">
        <div class="flex-column flex-column--flexible">
            <h4 class="heading-quaternary heading-quaternary--about">Description</h4>
            <p>{!! $portfolio->body !!}</p>
        </div>
    
          @if($portfolio->design_body) 
            <div class="flex-column flex-column--flexible">
                <h4 class="heading-quaternary heading-quaternary--about">Design phase</h4>
                <p>{{ $portfolio->design_body }}</p>
            </div>
          @endif
      </div>
      <div class="flex-container m-top--md">
          @if($portfolio->technology)
            <div class="flex-row">
              <h4 class="heading-quaternary heading-quaternary--about">Technology used</h4>
              <p>{{ $portfolio->technology }}</p>
            </div>
          @endif
      </div>

      {{-- @if($portfolio->desk_image)
      <div class="flex-container">
        <div class="flex-column">
          <img class="portfolio__image--desktop" src="{{ asset('img/portfolio/full/' . $portfolio->desk_image) }}" alt="{{ $portfolio->title }} Desktop Image">
        </div>
        @if($portfolio->mobile_image)
        <div class="flex-column">
          <img class="portfolio__image--mobile" src="{{ asset('img/portfolio/full/' . $portfolio->mobile_image) }}" alt="{{ $portfolio->title }} Mobile Image">
        </div>
        @endif
      </div>
      @endif --}}
    </div>


    @if($portfolio->full_image)
     <img class="portfolio__image--full" src="{{ "http://res.cloudinary.com/blazerowland/image/upload/v1526829190/Portfolio/full/" . $portfolio->full_image }}" alt="{{ $portfolio->title }} Full Image">
    @endif
  </div>

@stop