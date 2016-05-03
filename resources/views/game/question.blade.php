@extends('layouts.master')

@section('title')
    Gameboard - Another CTF
@stop

@section('head')
    <link href="/css/play.css" rel='stylesheet'>
@stop

@section('content')
<h1> Category: {{ $category->category }}</h1>
<br /><br />
<div class='container'>
    <div class='row row-centered'>
        <div class='col-md-4 col-md-offset-4'>
            <h4>Point Value: {{ $question->difficulty*50 }}</h4>
        </div>
    </div>
    <br />
    <div class='row'>
        <div class='col-md-4 col-md-offset-4 questionbox'>
            {{ $question->question }}
        </div>
    </div>
    <br />
    <div class='row'>
        <div class='col-md-4 col-md-offset-4 wrap'>
            <div class='hint'>Hint 1</div>
            <div class='hint'>Hint 2</div>
        </div>
    </div>
    </div>
</div>
<div class='container'>
    <div class='col-sm-7 col-centered fancyboxback'>
        <a href='#' onclick="history.back();">
            <div class='categorytext'>
                Go Back To Questions
            </div>
        </a>
    </div>
</div>
@stop
