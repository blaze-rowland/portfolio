@extends('layouts.admin')
@section('content')
<div id="container">
  <section id="create-form">
    <h1 class="heading-primary">Create Portfolio</h1>
    <div class="create-grid">
      <div class="create-form">
        <form action="{{ route('portfolio.update') }}" method="POST">
        <input name="_method" type="hidden" value="PUT">
          @csrf
          <div class="form-group">
            <label for="title">Title: </label>
            <input type="text" name="title" value="{{old('title')}}" required autofocus>
          </div>
          <div class="form-group">
            <label for="body">Body:</label>
            <textarea name="body" id="" cols="30" rows="10" required>{{old('body')}}</textarea>
          </div>
          <div class="form-group">
            <label for="technology">Technology Used:</label>
            <input type="text" name="technology" value="{{old('technology')}}" required>
          </div>
          <div class="form-group">
            <label for="design_body">Design Information:</label>
            <textarea name="design_body" id="" cols="30" rows="10" required>{{old('design_body')}}</textarea>
          </div>
          <div class="form-group">
            <label for="full_image">Full Image:</label>
            <input type="text" name="full_image" value="{{old('full_image')}}" required>
          </div>
          <div class="form-group">
            <label for="cover_image">Cover Image:</label>
            <input type="text" name="cover_image" value="{{old('cover_image')}}" required>
          </div>
          <div class="form-group">
            <label for="mobile_image">Mobile Image:</label>
            <input type="text" name="mobile_image" value="{{old('mobile_image')}}" required>
          </div>
          <div class="form-group">
            <label for="desk_image">Desktop Image:</label>
            <input type="text" name="desk_image" value="{{old('desk_image')}}" required>
          </div>
      </div>
      <div class="sidebar">
        <input type="submit" value="Update" class="btn btn-admin">
      </form>
      </div>
    </div>
    @include('partials._errors')
  </section>
</div>
@stop
