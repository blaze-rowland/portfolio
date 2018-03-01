@extends('layouts.admin')
@section('content')
<div id="container">
  <section id="create-form">
    <h1>Create Post</h1>
    <div class="create-grid">
      <div class="create-form">
        <form action="{{ route('posts.store') }}" method="POST">
          @csrf
          <div class="form-group">
            <label for="title">Title: </label>
            <input type="text" name="title" value="{{old('title')}}" required autofocus>
          </div>
          <div class="form-group">
            <label for="cover_image">Image: </label>
            <input type="url" name="cover_image" value="{{old('image')}}" required>
          </div>
          <div class="form-group">
            <label for="body">Body:</label>
            <textarea name="body" id="" cols="30" rows="10" required>{{old('body')}}</textarea>
          </div>
      </div>
      <div class="sidebar">
        <input type="submit" value="Post" class="btn btn-admin">
      </form>
      </div>
    </div>
    @include('partials._errors')
  </section>
</div>
@stop
