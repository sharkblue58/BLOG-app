@extends('layout.layout')
@section('title','edit')
@section('content')
<h1>Hallo, create Post here</h1>
<form  action="{{route('posts.update',$post->id)}}" method="POST">
  @method('POST')
  @csrf
<div class="mb-3">
    <label class="form-label">Title</label>
    <input type="text" class="form-control" value="{{$post['title']}}" name="title" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Description</label>
    <textarea class="form-control" name="description" >{{$post['desc']}}</textarea>
  </div>
  <div class="mb-3">
    <label class="form-label">Post Creator</label>
    <input type="text" class="form-control" name="post_creator"  >
  </div>
  <button type="submit" class="btn btn-success">update</button>
</form>
@endsection