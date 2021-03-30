@extends('layout.app')


@section('content')
    
    <h2>Criar Post</h2>
    <hr>
    <ul class="errors">
        @foreach ($errors->all() as $message) 
            <li> {{ $message }} </li>
        @endforeach
    </ul>
    <br>
    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        <input type="text" name="title" placeholder="titulo">
        <br>
        <br>
        <input type="text" name="url" placeholder="URL">
        <hr>
        <textarea name="content" id="content" cols="30" rows="10"></textarea>
        <hr>
        <input type="submit" value="Salvar">
    </form>
  
@endsection