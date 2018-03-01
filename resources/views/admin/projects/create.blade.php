@extends('layouts.admin')
@include('partials._adminNav')
@section('content')
<div id="container">
  <section id="create-form">
    <h1>Create Project</h1>
    <div class="create-grid">
      <div class="create-form">
        <form action="{{ route('projects.store') }}" method="POST">
          @csrf
          <div class="form-group">
            <label for="title">Project:</label>
            <input type="text" name="title" value="{{ old('title') }}" required>
          </div>
          <div class="form-group">
            <label for="type">Type:</label>
            <select name="type">
              <option value="Development">Development</option>
              <option value="Graphic Design">Graphic Design</option>
              <option value="Other">Other</option>
            </select>
          </div>
          <div class="form-group">
            <label for="client">Client:</label>
            <select name="client">
              @foreach($clients as $client)
                <option value="{{ $client->id }}">{{ $client->name }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="budget">Budget:</label>
            <input type="integer" name="budget" value="{{ old('budget') }}" required>
          </div>
          <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" cols="30" rows="3">{{ old('description') }}</textarea>
          </div>
          <div class="form-group">
            <label for="due_date">Due Date:</label>
            <input type="date" name="due_date" value="{{ old('due_date') }}" required>
          </div>
      </div>
      <div class="sidebar">
        <input type="submit" value="Create Project" class="btn btn-admin">
      </form>
      </div>
    </div>
  </section>
</div>
@stop
