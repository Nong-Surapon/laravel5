@extends('master')

@section('content')
    <h1>Justin Bieber Official Fan Club</h1>

    @foreach($songs as $song)
    <li><a href="songs_db/{{ $song->id }}">{{$song->title}}</a></li>
    @endforeach


@stop