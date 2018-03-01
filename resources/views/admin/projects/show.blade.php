@extends('layouts.admin')
@section('content')
@include('partials._adminNav')
  <div id="container">
    <section id="blog">
      <h1 class="inline">{{ $project->title }}</h1>
      <pre class="header-aside"><a href="{{route('clients')}}">Home</a> / {{ $project->title }}</pre>
      <div class="card-grid m-25">
          <div class="card full">
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
                <div class="title">
                  <pre><i class="fa fa-calendar-o"> </i>{{ date('F j, Y', strtotime($project->due_date)) }}</pre>
                </div>
                <div class="text">{!! $project->description !!}</div>
                <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-admin">Edit</a>
            </div>
          </div>
      </div>

      @if($project->notes !== null)
      <h1>Note</h1>
        <div class="card-grid">
            @if($project->notes !== null)
              <div class="card alone">
                <div class="type text-center">
                    <i class="fa fa-sticky-note"></i> Note
                </div>
                <div class="body">
                    <div class="title">{{ $project->title }}</div>
                    <div class="text">{{ $project->notes}}</div>
                    <a href="{{ route('projects.note.edit', $project->id) }}" class="btn btn-admin">Edit</a>
                </div>
              </div>
          @endif
        </div>
      @else
        <p class="m-50 lead">No Notes Have Been Recorded...</p>
        <div class="add m-25">
          <a href="{{ route('projects.note.create', $project->id) }}" class="btn btn-admin">Add Note</a>
        </div>
      @endif
    </section>
  </div>
@stop
