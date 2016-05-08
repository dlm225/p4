@extends('layouts.master')

@section('title')
    Gameboard - Another CTF
@stop

@section('head')
    <link href="/css/play.css" rel='stylesheet'>
@stop

@section('content')
<h1> Category: {{ $category->category }}</h1>

@if($questions)
    <h3>Choose a point value to play...</h3>
    <div class='container'>
        @foreach($questions as $question)
            <div class='col-xs-4 col-centered fancycategoryboxsmall'>
                <a href='/question/{{ $question->id }} '>
                    <div class='categorytext'>
                        {{ $question->difficulty*100 }}
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@else
    <div class='container'>
        <div class='col-sm-7 col-centered'>
            <h3 class='noquestion'>No questions for this category yet.</h3>
        </div>
    </div>
@endif
<div class='container'>
    <div class='col-sm-7 col-centered fancyboxback'>
        <a href='/play '>
            <div class='categorytext'>
                Go Back To Categories
            </div>
        </a>
    </div>
</div>


@stop
