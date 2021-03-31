@extends('layout.app')


@section('content')
    
    <h1>Post</h1>

    <a href="{{ route('posts.create') }}">Novo post</a>
    <hr>

    <ul>
        @foreach ($posts as $post)
           <x-post-item color="red" :post="$post"></x-post-item>
            <br>
        @endforeach
    </ul>
  
@endsection