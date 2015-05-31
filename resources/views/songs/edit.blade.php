@extends('master')
@section('content')
    <h2>{{ $song->title }}</h2>





    {{ Form::model($song, ['route' => ['songs.update', $song->slug], 'method' => 'PATCH']) }}

        <div class="form-group">

            {{ Form::text('title', null, ['class' => 'form-control']) }}

        </div>

        <div class="form-group">

            {{ Form::textarea('lyrics', null, ['class' => 'form-control']) }}

        </div>

        <div class="form-group">

            {{ Form::submit('Update Song', ['class' => 'btn btn-primary']) }}

        </div>

    {{ Form::close() }}

@stop