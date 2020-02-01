@extends('layouts.base')
@section('content')
<h1 class="text-primary">Mensajes</h1>

@foreach ($mensajitos as $mensajito)
    <p class="text-info">{{$mensajito->usuario}} : {{$mensajito->mensaje}}</p>
@endforeach

@php
    header("refresh:2");
@endphp
  
@endsection