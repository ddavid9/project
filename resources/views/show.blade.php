@extends('layout')

@section('content')
<h1>Save info</h1>
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
