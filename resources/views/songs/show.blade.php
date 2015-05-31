@extends('master')

@section('content')


<h2>{{ $song->title }}</h2>

    @if ($song->lyrics)
        <article class="lyrics">
            <!! nl2br($song->lyrics) !!}
        </article>
    @endif

        <a href="{{ URL::route('songs.index') }}">
            <span class="menu-text">  Go Back Home </span>
        </a>

@stop