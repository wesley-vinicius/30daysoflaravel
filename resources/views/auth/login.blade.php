
@extends('layout.app')


@section('content')
    <ul class="errors">
        @foreach ($errors->all() as $message) 
            <li> {{ $message }} </li>
        @endforeach
    </ul>
    <form action="/login" method="post">
        @csrf
        <input type="text" name="email" id="email" placeholder="Email"><br/>
        <input type="password" name="password" id="password" placeholder="Senha"><br/>
        <input type="submit" value="Entrar">
    </form>
@endsection