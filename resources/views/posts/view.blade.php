@extends('layout.layout')
@section('title','welcome')
@section('content')
<h1>Hallo, view a post</h1>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">description</th>
        <th scope="col">Post By</th>
        <th scope="col">Created At</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{$post->id}}</td>
        <td>{{$post->title}}</td>
        <td>{{$post->desc}}</td>
        <td>{{$post->postBy}}</td>
        <td>{{$post->created_at->diffForHumans()}}</td>
        <td>
            <a href="{{route('posts.index')}}"><button type="button" class="btn btn-warning" >back</button></a>
        </td>
      </tr>
    </tbody>
  </table>
  <h1>leave a comment</h1>
  {{route('comment.index',$post->id)}}
<form method="POST" action="{{route('comment.store',$post->id)}}">
  @csrf
  <div class="mb-3">
    <label  class="form-label">comment area</label>
    <textarea class="form-control"  name="comment"></textarea>
  </div>
  <button type="submit" class="btn btn-success">comment</button>
</form>
<br>
<p></p>
<br>
@endsection