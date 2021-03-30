@extends('layout.app')


@section('content')
    
    <h1>Post</h1>

    <a href="posts/create">Novo post</a>
    <hr>

    <ul>
        @foreach ($posts as $item)
            <li> 
                Vinculo por ID <a href="post/{{ $item->id }}"> {{$item->title}} </a> <br/> 
                Vinculo por Titulo: <a href="{{ $item->title }}"> {{$item->title}} </a>
            </li>
            <br>
        @endforeach
    </ul>
  
@endsection