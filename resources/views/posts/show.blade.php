@extends('layout.app')


@section('content')
    
    <h2> {{ $post->title }} </h2>
    <hr>

    {{ $post->content }}

    <hr>

    <a href="{{ route('posts.index') }}">Voltar</a>
  
@endsection