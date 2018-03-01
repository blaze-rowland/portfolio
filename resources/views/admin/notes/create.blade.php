@extends('layouts.admin')
@section('content')
<div id="container">
  <section id="create-form">
    <h1>Create Note</h1>
    <div class="create-grid">
      <div class="create-form">
        <form action="{{ route('projects.note.update', $project->id) }}" method="POST">
          <input type="hidden" name="_method" value="PUT">
          @csrf
          <div class="form-group">
            <label for="notes">Note:</label>
            <textarea name="notes" cols="30" rows="5" required>{{ old('notes') }}</textarea>
          </div>
      </div>
      <div class="sidebar">
        <input type="submit" value="Add Note" class="btn btn-admin">
      </form>
      </div>
    </div>
    @include('partials._errors')
  </section>
</div>
@stop
