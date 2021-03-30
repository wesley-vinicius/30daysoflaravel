@extends('layout.app')


@section('content')
    
    <h1>Post</h1>

    <a href="posts/create">Novo post</a>
    <hr>

    <ul>
        @foreach ($posts as $item)
            <li><a href="post/{{ $item->id }}"> {{$item->title}} </a></li>
        @endforeach
    </ul>
  

@endsection