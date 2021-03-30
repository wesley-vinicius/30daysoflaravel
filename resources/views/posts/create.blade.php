@extends('layout.app')


@section('content')
    
    <h2>Criar Post</h2>
    <hr>
    <form action="/posts" method="post">
        @csrf
        <input type="text" name="title" placeholder="titulo">
        <hr>
        <textarea name="content" id="content" cols="30" rows="10"></textarea>
        <hr>
        <input type="submit" value="Salvar">
    </form>
  
@endsection