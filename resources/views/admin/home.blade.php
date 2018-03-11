@extends('layouts.admin')
@section('content')
<div id="container">
  <section id="top-dash">
    <h1>Dashboard</h1>
    <pre class="float-right"> {{ Auth::user()->name }} </pre>
    <ul class="quick-info">
      <a href="{{ route('revenue.index') }}">
        <li>
          <div class="aside-icon income">
            <i class="fa fa-arrow-circle-up"></i>
          </div>
          <div class="info">
            <h3 class="info-income">Income</h3>
            <p>${{ $income }}</p>
          </div>
        </li>
      </a>
      <a href="{{ route('revenue.index') }}">
        <li>
          <div class="aside-icon expense">
            <i class=" fa fa-arrow-circle-down"></i>
          </div>
          <div class="info">
            <h3 class="info-expense">Expense</h3>
            <p>${{ $expense }}</p>
          </div>
        </li>
      </a>
      <a href="{{ route('clients.index') }}">
        <li>
          <div class="aside-icon clients">
            <i class="fa fa-users"></i>
          </div>
          <div class="info">
            <h3 class="info-clients">Clients</h3>
            <p>{{ $clients }}</p>
          </div>
        </li>
      </a>
      <a href="{{ route('projects.index') }}">
        <li>
          <div class="aside-icon projects">
            <i class="fa fa fa-briefcase"></i>
          </div>
          <div class="info">
            <h3 class="info-projects">Projects</h3>
            <p>{{ $projects }}</p>
          </div>
        </li>
      </a>
    </ul>
  </section> <!-- ./top-dash -->
  <section id="analytics-1">
    <div class="main text-center">
      <h3>Sessions by Country</h3>
      <iframe class="m-25" width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vR2YqktpLjqkOC-xh3JR4nf3-ip-L8weIm_LROeJ9MnDxgrJiIKx2FgKd7DINqWYtBVe5Sk9N_G85Cv/pubchart?oid=1929479054&amp;format=interactive"></iframe>
    </div>
    <div class="side-1 text-center">
      <h3>Sessions by Browser</h3>
      <iframe class="m-25" width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vR2YqktpLjqkOC-xh3JR4nf3-ip-L8weIm_LROeJ9MnDxgrJiIKx2FgKd7DINqWYtBVe5Sk9N_G85Cv/pubchart?oid=150393210&amp;format=interactive"></iframe>
    </div>
  </section> <!-- ./analytics -->
  <section id="analytics-2">
    <div class="side-1">
      @isset($due[0])
        <h2>
          Coming Up
          <span class="pull-right"><i class="fa fa-calendar-o"></i> {{ date('F jS, Y', strtotime($due[0]->due_date)) }}</span>
        </h2>
        <div class="project">
          <div class="title">
            <h3>{{ $due[0]->title }}</h3>
          </div>
          <div class="body">
            <p>{{ strip_tags(str_limit($due[0]->description, $limit = 800, $end = '...')) }}</p>
          </div>
          <a href="{{ route('projects.show', $due[0]->id) }}" class="btn btn-admin block">View</a>
        </div>
      @endisset
      @empty($due[0])
        <h3>No upcoming projects...</h3>
      @endempty
    </div>
    @isset($recent[0])
      <div class="side-2 card">
        <div class="img">
          <img class="top" src="{{ $recent[0]->cover_image }}" alt="Name Of Post - Image" onerror="this.style.display='none'">
          <span><i class="fa fa-clock-o" title="Most Recent Post"></i></span>
        </div>
        <div class="body">
          <h3 class="title"><a href="{{ route('posts.show', $recent[0]->id) }}">{{ str_limit($recent[0]->title, $limit = 40, $end = '...') }}</a></h3>
          <pre class="float-right"><i class="fa fa-calendar-o"> </i> {{ date('F jS, Y', strtotime($recent[0]->created_at)) }}</pre>
          <p class="text">{{ strip_tags(str_limit($recent[0]->body, $limit = 225, $end = '...')) }}</p>
          <a href="{{ route('posts.edit', $recent[0]->id) }}" class="btn btn-admin pull-right block">Edit</a>
        </div>
      </div>
    @endisset
    @empty($recent[0])
      <div class="side-2 card">
        <h3 class="p-25">There are no posts...</h3>
        <a href="{{ route('posts.create') }}" class="btn btn-sm btn-admin ml-25">Create One</a>
      </div>
    @endempty
  </section>
</div> <!-- ./container -->

@endsection
