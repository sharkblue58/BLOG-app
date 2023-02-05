@extends('layout.layout')
@section('title','welcome')
@section('content')
<h1>Hallo, All Posts</h1>
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
     @if(!@empty($posts)&&$posts->count())
        @foreach ($posts as $post )
      <tr>
        <td>{{$post->id}}</td>
        <td>{{$post->title}}</td>
        <td>{{$post->desc}}</td>
        <td>{{$post->postBy}}</td>
        <td>{{$post->created_at->diffForHumans()}}</td>
        <td>
            <a href="{{route('posts.show',$post->id)}}"><button type="button" class="btn btn-info" >view</button></a>
            <a href="{{route('posts.edit',$post->id)}}"><button type="button" class="btn btn-primary">edit</button></a>
            <form action="{{route('posts.destroy',$post->id)}}" method="post" style="margin-top: 7px ">
              @method('POST')
              @csrf
            <button type="submit" class="btn btn-danger">delete</button>
            </form>
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
  <div class="row">{{$posts->links()}}</div>
 to create a post  <a href="{{route('posts.create')}}"><button type="button" class="btn btn-success">create</button></a><br><br>
 to restore a post <a href="{{route('posts.softDele')}}"><button type="button" class="btn btn-primary">restore</button></a>
@endsection
