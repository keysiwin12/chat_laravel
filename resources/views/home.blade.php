@extends('layouts.app')

@section('content')

<div class="container">
    <h3 class=" float-right text-danger">{{Auth::user()->name}}</h3>
    <iframe src="/mensajes" frameborder="0" width= "600" height = "400"></iframe> <br>
    <iframe src="/mensajes/create" frameborder="0" width= "600" height = "400"></iframe>  
</div>

@endsection
