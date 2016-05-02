@extends('layouts.master')

@section('title')
    Gameboard - Another CTF
@stop

@section('head')
    <link href="/css/gameboard.css" rel='stylesheet'>
@stop

@section('content')
<h1> Category: </h1>

<h3>Choose a point value to play...</h3>

<div class='container'>
    <div class='row-centered'>
        <div class='col-xs-4 col-centered fancycategorybox'>
            <div class='categorytext'>100</div>
        </div>

        <div class='col-xs-4 col-centered fancycategorybox'>
            <div class='categorytext'>200</div>
        </div>

        <div class='col-xs-4 col-centered fancycategorybox'>
            <div class='categorytext'>300</div>
        </div>
        <div class='col-xs-4 col-centered fancycategorybox'>
            <div class='categorytext'>400</div>
        </div>
    </div>
</div>
@stop
