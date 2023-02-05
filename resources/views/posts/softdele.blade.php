@extends('layout.layout')
@section('title','welcome')
@section('content')
<h1>Hallo, Restored Posts</h1>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">deleted time</th>
        <th scope="col">Created At</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
    @if(!@empty($posts)&&$posts->count())
        @foreach ($posts as $post )
      <tr>
        <td>{{$post['id']}}</td>
        <td>{{$post['title']}}</td>
        <td>{{$post->deleted_at->diffForHumans()}}</td>
        <td>{{$post->created_at->diffForHumans()}}</td>
        <td>
            <a href="{{route('post.restore',$post->id)}}"><button type="button" class="btn btn-info" >restored</button></a>
            <a href="{{route('post.remove',$post->id)}}"><button type="button" class="btn btn-danger" >remove</button></a>
        </td>
      </tr>
      @endforeach
      @else
      <tr>
         <td>no records here</td>
      </tr>
      @endif
    </tbody>
  </table>
@endsection
