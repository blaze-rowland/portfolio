@extends('layouts.admin')
@section('content')
@include('partials._adminNav')
<div id="container">
  <section id="create-form">
    <h1>Add Client</h1>
    <div class="create-grid">
      <div class="create-form">
        <form action="{{ route('clients.update', $client->id) }}" method="POST">
          <input name="_method" type="hidden" value="PUT">
          @csrf
          <div class="form-group">
            <label for="title">Name: </label>
            <input type="text" name="name" value="{{$client->name}}" required autofocus>
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" value="{{$client->email}}" required>
          </div>
      </div>
      <div class="sidebar">
        <input type="submit" value="Edit" class="btn btn-admin">
      </form>
      </div>
    </div>
    @include('partials._errors')
  </section>
</div>
@stop
