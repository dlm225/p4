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


@foreach($categories as $category)
<div class='container'>
    <div class='row-centered'>
        <div class='col-xs-4 col-centered fancycategorybox'>
            {!! Form::open(array('url' => '/gameboard')) !!}
                <a href='/gameboard?id={{ $category_id }}><div class='categorytext'> {{ $category }} </div></a>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endforeach
@stop
