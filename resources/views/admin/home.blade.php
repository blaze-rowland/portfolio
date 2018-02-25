@extends('layouts.admin')

@section('content')
<div id="container">
  <section id="top-dash">
    <h1>Dashboard</h1>
    <pre style="float:right;"> {{ Auth::user()->name }} </pre>

    <ul class="quick-info">
      <li>
        <div class="aside-icon income">
          <i class="fa fa-arrow-circle-up"></i>
        </div>
        <div class="info">
          <h3 class="info-income">Income</h3>
          <p>$700</p>
        </div>
      </li>
      <li>
        <div class="aside-icon expense">
          <i class=" fa fa-arrow-circle-down"></i>
        </div>
        <div class="info">
          <h3 class="info-expense">Expense</h3>
          <p>$300</p>
        </div>
      </li>
      <li>
        <div class="aside-icon clients">
          <i class="fa fa-users"></i>
        </div>
        <div class="info">
          <h3 class="info-clients">Clients</h3>
          <p>10</p>
        </div>
      </li>
      <li>
        <div class="aside-icon projects">
          <i class="fa fa fa-briefcase"></i>
        </div>
        <div class="info">
          <h3 class="info-projects">Projects</h3>
          <p>12</p>
        </div>
      </li>
    </ul>
  </section>
  <section id="analytics">
    <div class="main">
      <h3>Main Analytics</h3>
    </div>
    <div class="side-1">
      <h3>Side-1</h3>
    </div>
    <div class="side-2">
      <h3>Side-2</h3>
    </div>
  </section>
</div>
@endsection
