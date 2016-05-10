@extends('layouts.master')

@section('title')
    Delete Question - Another CTF
@stop

@section('head')
    <link href="/css/profile.css" rel='stylesheet'>
    <link href="/css/play.css" rel='stylesheet'>
@stop

@section('content')
<h1>Confirm Question #{{$question->id}} Deletion</h1>

<div class='container'>
    <div class='row row-centered fancyboxsilver'>
        <div class='questionbox'> {{ $question->question }} </div>
        <div>
            Category: {{ $category->category }} <br />
            Flag: {{ $question->flag }} <br />
            Hint 1: {{ $question->hint1 }} <br />
            Hint 2: {{ $question->hint2 }} <br />
            Difficulty: {{ $question->difficulty }} <br />
        </div>
        <div class='row row-centered2'>
            <div class='createdbybox'>
                <span class='createdby'>This question uploaded by '{{ $question->user->username }}'</span>
            </div>
        </div>
        <br />
        <button class='left-btn' onclick="window.location.href='/administratequestions'">Cancel</button>
        <button class='right-btn' onclick="window.location.href='/deletequestionconfirmed/{{ $question->id }}'">Delete</button>
    </div>
</div>
@stop
