@extends('layouts.admin')
@include('partials._adminNav')
@section('content')
  <div id="container">
    <section id="revenue">
      <h1>Revenue</h1>
      <table class="full-width">
        <tr class="shadow">
          <th class="num">#</th>
          <th>Project</th>
          <th>Income</th>
          <th>Expense</th>
          <th>Total</th>
        </tr>
        @for($i = 1; $i <= 10; $i++)
          <tr>
            <td class="num">{{$i}}</td>
            <td><a href="#">Project {{$i}}</a></td>
            <td class="positive">${{ 50 * $i }}</td>
            <td class="negative">${{ 2 * $i }}</td>
            <td>${{ (50 * $i) - 2 * $i }}</td>
          </tr>
        @endfor
        <tr>
          <td>Revenue:</td>
          <td></td>
          <td></td>
          <td></td>
          <td class="positive">$2,640</td>
        </tr>
      </table>
    </section>
  </div>
@stop
