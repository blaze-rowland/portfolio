@extends('layouts.admin')
@section('content')
@include('partials._adminNav')
  <div id="container">
    <section id="clients">
      <h1>Clients</h1>
      <table class="full-width">
        <tr class="shadow">
          <th class="num">#</th>
          <th>Name</th>
          <th>Email</th>
          <th>Project</th>
          <th>Start Date</th>
          <th>Due Date</th>
        </tr>
        @foreach($clients as $client)
            <tr>
              <td>{{ $client->id }}</td>
              <td><a href="{{ route('clients.show', $client->id) }}">{{ $client->name }}</a></td>
              <td>{{ $client->email }}</td>
              <td><a href="{{route('projects.show', $client->projects[0]->id)}}">{{ $client->projects[0]->title }}</a></td>
              <td>{{ date('F jS, Y', strtotime($client->projects[0]->created_at)) }}</td>
              <td>{{ date('F jS, Y', strtotime($client->projects[0]->due_date)) }}</td>
            </tr>
        @endforeach
      </table>
    </section>
  </div>
@stop
