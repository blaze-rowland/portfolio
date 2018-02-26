@extends('layouts.admin')
@include('partials._adminNav')
@section('content')
  <div id="container">
    <section id="clients">
      <h1>Clients</h1>
      <table class="full-width">
        <tr class="shadow">
          <th class="num">#</th>
          <th>Name</th>
          <th>Email</th>
          <th>Project</th>
          <th>Income</th>
          <th>Expense <a href="#"><i class="fa fa-plus float-right"></i></a></th>
        </tr>
        @for($i = 1; $i <= 10; $i++)
          <tr>
            <td>{{$i}}</td>
            <td>Client {{ $i }}</td>
            <td>email{{$i}}@gmail.com</td>
            <td><a href="#">Project {{$i}}</a></td>
            <td>{{ 22 * $i }}</td>
            <td>{{ 3 * $i }}</td>
          </tr>
        @endfor
      </table>
    </section>
  </div>
@stop
