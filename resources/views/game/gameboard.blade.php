@extends('layouts.master')

@section('title')
    Gameboard - Another CTF
@stop

@section('head')
    <link href="/css/gameboard.css" rel='stylesheet'>
@stop

@section('content')
<h1> Category: {{ $category->category }}</h1>

<h3>Choose a point value to play...</h3>

<div class='container'>
    @foreach($questions as $question)
        <div class='col-xs-4 col-centered fancycategorybox'>
            {!! Form::open(array('url' => '/gameboard')) !!}
                <a href='/question/{{ $question->id }} '><div class='categorytext'> {{ $question->difficulty }} * 50 </div></a>
            {!! Form::close() !!}
        </div>
    @endforeach
</div>


@stop
