@extends('layout')

@section('content')

<h1>Saves</h1>
@if (auth()->check())

    @if ($saves->isEmpty())
        You dont have any saves!
    @else
        @foreach($saves as $save)
            <h3>{{$save->save}}</h3>
        @endforeach
    @endif
@else
    You're not logged in!
@endif

@endsection
