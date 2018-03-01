@extends('layouts.admin')
@section('content')
<div id="container">
  <section id="top-dash">
    <h1>Dashboard</h1>
    <pre class="float-right"> {{ Auth::user()->name }} </pre>

    <ul class="quick-info">
      <a href="">
        <li>
          <div class="aside-icon income">
            <i class="fa fa-arrow-circle-up"></i>
          </div>
          <div class="info">
            <h3 class="info-income">Income</h3>
            <p>$700</p>
          </div>
        </li>
      </a>
      <a href="">
        <li>
          <div class="aside-icon expense">
            <i class=" fa fa-arrow-circle-down"></i>
          </div>
          <div class="info">
            <h3 class="info-expense">Expense</h3>
            <p>$300</p>
          </div>
        </li>
      </a>
      <a href="">
        <li>
          <div class="aside-icon clients">
            <i class="fa fa-users"></i>
          </div>
          <div class="info">
            <h3 class="info-clients">Clients</h3>
            <p>10</p>
          </div>
        </li>
      </a>
      <a href="">
        <li>
          <div class="aside-icon projects">
            <i class="fa fa fa-briefcase"></i>
          </div>
          <div class="info">
            <h3 class="info-projects">Projects</h3>
            <p>12</p>
          </div>
        </li>
      </a>
    </ul>
  </section> <!-- ./top-dash -->
  <section id="analytics-1">
    <div class="main">
      <h3>Main Analytics</h3>
    </div>
    <div class="side-1">
      <h3>Side-1</h3>
    </div>
    <div class="side-2">
      <h3>Side-2</h3>
    </div>
  </section> <!-- ./analytics -->
  <section id="analytics-2">
    <div class="side-1">
      <h3>Side-1</h3>
    </div>
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
  </section>
</div> <!-- ./container -->

@endsection
