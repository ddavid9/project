@extends('layout')

@section('content')
<h1>Save info</h1>

<?php
    if ((!isset($_SERVER['HTTP_REFERER']))or!($_SERVER['HTTP_REFERER'] == "http://127.0.0.1:8000/saves/"))
    {
        header("Location: http://127.0.0.1:8000/saves");
        exit();
    }
?>

    Name: {{$save->name}}
    <br>
    Saved at: {{$save->updated_at}}
    <br>
    <a href="/load/{{$save->id}}"><button>Load</button></a>
    <form action="/saves/{{$save->id}}" method=POST>
        @csrf
        @method('DELETE')
        <button>Delete</button>
    </form>
@endsection
