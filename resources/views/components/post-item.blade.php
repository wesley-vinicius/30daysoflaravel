@props(['color' => '', 'post'])
<li> 
    Vinculo por ID <a style="color:{{ $color }}" href="posts/{{ $post->id }}"> {{$post->title}} </a> <br/> 
    Vinculo por Titulo: <a href="{{ $post->title }}"> {{$post->title}} </a>
</li>