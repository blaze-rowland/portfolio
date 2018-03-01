@extends('layouts.admin')
@if(Auth::check())
  @include('partials._adminNav')
@else
  <div class="back-button">
    <a href="{{ route('/') }}">  <i class="fa fa-arrow-left"></i> </a>
  </div>
@endif
@section('content')
  <div id="container">
    <section id="blog">
      <h1>{{ $client->name }}</h1>
      <div class="card-grid">
        @foreach($projects as $project)
          <div class="card alone">
            <div class="type text-center">
              @if($project->type === 'Development')
                <i class="fa fa-code"></i> {{ $project->type }}
              @elseif($project->type === 'Graphic Design')
                <i class="fa fa-paint-brush"></i> {{ $project->type }}
              @elseif($project->type === 'Other')
                <i class="fa fa-question"></i> {{ $project->type }}
              @endif
            </div>
            <div class="body">
                <div class="title">{{ $project->title }}</div>
                <div class="text">{{ str_limit($project->description, $limit = 225, $end = '...') }}</div>
                <a href="{{ route('projects.show', $project->id) }}" class="btn btn-admin">View</a>
            </div>
          </div>
        @endforeach
      </div>
    </section>
  </div>
@stop
