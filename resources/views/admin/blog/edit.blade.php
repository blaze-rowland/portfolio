@extends('layouts.admin')
@include('partials._adminNav')
@section('content')
<div id="container">
  <section id="create-form">
    <h1>Edit Post</h1>
    <div class="create-grid">
      <div class="create-form">
        <form action="{{ route('posts.update', $post->id) }}" method="POST" class="post-form">
          <input name="_method" type="hidden" value="PUT">
          @csrf
          <div class="form-group">
            <label for="title">Title: </label>
            <input type="text" name="title" value="{{$post->title}}" required autofocus>
          </div>
          <div class="form-group">
            <label for="cover_image">Image: </label>
            <input type="url" name="cover_image" value="{{$post->cover_image}}" required>
          </div>
          <div class="form-group">
            <label for="body">Body:</label>
            <textarea name="body" id="" cols="30" rows="10" class="" required>{!!$post->body!!}</textarea>
          </div>
      </div>
      <div class="sidebar">
          <input type="submit" value="Edit" class="btn btn-admin">
        </form>
      </div>
    </div>
  </section>
</div>
@stop
