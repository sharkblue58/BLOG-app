@extends('layout.layout')
@section('title','create')
@section('content')
<h1>Hallo, create Post here</h1>
<form method="POST" action="{{route('posts.store')}}">
  @csrf
<div class="mb-3">
    <label class="form-label">Title</label>
    <input type="text" class="form-control" name="title" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Description</label>
    <textarea class="form-control"  name="description"></textarea>
  </div>
  <div class="mb-3">
    <label class="form-label">Post Creator</label>
    <input type="text" class="form-control" name="post_creator" >
  </div>
  <button type="submit" class="btn btn-success">create</button>
</form>
  
@endsection