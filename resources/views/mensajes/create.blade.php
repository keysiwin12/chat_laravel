@extends('layouts.base')
@section('content')
<form action="{{url('/mensajes')}}" method = "POST">
    @csrf
    <input type="hidden" name = "usuario" value= "{{Auth::user()->name}}">
    <input type="text" name = "mensaje" size = "50">
    <input class="btn btn-primary btn-sm" type="submit" value = "enviar"> 
</form>

@endsection
