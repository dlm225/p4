@extends('layouts.master')

@section('title')
    Play - Another CTF
@stop

@section('head')
    <link href="/css/play.css" rel='stylesheet'>
@stop

@section('content')
<h1> {{Auth::user()->username}}'s Progress</h1>
<h2> Points: {{Auth::user()->points}}</h2>

<h3>Choose a topic to play...</h3>

<div class='container'>
    @foreach($categories as $category)
        <div class='col-xs-4 col-centered fancycategorybox'>
            <a href='/gameboard/{{ $category->id }}'>
                <div class='categorytext'>
                    {{ $category->category }}
                    @foreach($questionsByCatCount as $questionsByCat)
                        @if($category->id == $questionsByCat->category_id)
                            <span class="numQuestions">[ {{ $questionsByCat->total }} ]</span>
                        @endif
                    @endforeach
                </div>
            </a>
        </div>
    @endforeach
</div>

@stop
