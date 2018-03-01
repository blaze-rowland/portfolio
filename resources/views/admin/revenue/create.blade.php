@extends('layouts.admin')
@section('content')
<div id="container">
  <section id="create-form">
    <h1>Add Revenue</h1>
    <div class="create-grid">
      <div class="create-form">
        <form action="{{ route('revenue.store') }}" method="POST">
          @csrf
          <div class="form-group">
            <label for="project_id">Project:</label>
            <select name="project_id">
              @foreach($projects as $project)
                <option value="{{ $project->id }}">{{ $project->title }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="type">Type:</label>
            <div class="radio">
              Income<input type="radio" name="revenue" value="income" required>
              Expense<input type="radio" name="revenue" value="expense">
            </div>
          </div>
          <div class="form-group">
            <label for="amount">Amount:</label>
            <input type="integer" name="amount" value="{{ old('amount') }}" required>
          </div>
      </div>
      <div class="sidebar">
        <input type="submit" value="Add Revenue" class="btn btn-admin">
      </form>
      </div>
    </div>
    @include('partials._errors')
  </section>
</div>
@stop
