@extends('layouts.master')

@section('title')
    Categories - Another CTF
@stop

@section('head')
    <link href="/css/home.css" rel='stylesheet'>
@stop

@section('content')
<h1> {{Auth::user()->username}}'s Progress</h1>

<h3>Choose a topic to play...</h3>

<div class='container'>
    @foreach($categories as $category)
        <div class='col-xs-4 col-centered fancycategorybox'>
            {!! Form::open(array('url' => '/gameboard')) !!}
                <a href='/gameboard/{{ $category->id }} '><div class='categorytext'> {{ $category->category }} </div></a>
            {!! Form::close() !!}
        </div>
    @endforeach
</div>

@stop
