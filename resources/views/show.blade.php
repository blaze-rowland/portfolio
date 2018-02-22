@extends('layouts.app')
@section('content')
  <section id="portfolio-show">
  @if (Request::getQueryString() === 'port=jBoat')
    <div class="section-img">
        <img src="{{ asset('/img/portfolio/jBoat.jpg') }}" alt="jBoat Portfolio Image">
    </div>
  @else
  @endif
</div>
@stop
