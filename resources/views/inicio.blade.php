@extends('layouts.default')

@section('titulo')
Inicio
@endsection

@section('contenido')

@if ($posts->count())

<div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
  @foreach ($posts as $post)
  <div>
  <p class="text-gray-500 font-bold uppercase text-sm text-center my-4">{{$post->titulo}}</p>
    <a href="{{route('posts.show', ['post'=>$post, 'user'=>$post->user])}}">
      <img src="{{ asset('uploads') . '/' .$post->imagen}}" alt="Imagen del post {{$post->titulo}}">
    </a>
    <p class="text-gray-600 text-sm text-center my-4"><span class="font-bold">Autor: </span>{{$post->user->username}}</p>
  </div>
  @endforeach
</div>

<div class="my-10">
  {{$posts->links()}}
</div>
  
@else
  <p class="text-center">No se muestran publicaciones, debes de seguir a alguien para poder mostrarlas</p>
@endif

@endsection