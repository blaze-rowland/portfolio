@extends('layouts.admin')
@include('partials._adminNav')
@section('content')
  <div id="container">
    <section id="admin">
      <h1>Revenue</h1>
      <table class="full-width">
        <tr class="shadow">
          <th class="num">#</th>
          <th>Project</th>
          <th>Income</th>
          <th>Expense</th>
          <th>Total</th>
        </tr>
          @foreach($projects as $project)
            <tr>
              <td class="num">{{ $project->id }}</td>
              <td><a href="{{ route('projects.show', $project->id) }}">{{ $project->title }}</a></td>
              <td class="positive">${{ $project->revenue->sum('income') }}</td>
              <td class="negative">${{ $project->revenue->sum('expense') }}</td>
              <td>${{ $project->revenue->sum('income') - $project->revenue->sum('expense') }}</td>
            </tr>
          @endforeach
        <tr>
          <td>Revenue:</td>
          <td></td>
          <td></td>
          <td></td>
          <td class="positive">
            ${{ $revenues->sum('income') - $revenues->sum('expense') }}
          </td>
        </tr>
      </table>
    </section>
  </div>
@stop
