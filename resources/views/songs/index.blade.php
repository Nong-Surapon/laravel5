@extends('master')

@section('content')
    <h1>Justin Bieber Official Fan Club</h1>

  @foreach($songs as $song)
    <li>
       <a href="{{ URL::route('songs.show', [$song->slug]) }}">
            <i class="icon-dashboard"></i>
            <span class="menu-text">  {{$song->title}} </span>
       </a>

    </li>
  @endforeach


@stop