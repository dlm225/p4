@extends('layouts.master')

@section('title')
    Profile - Another CTF
@stop

@section('head')
    <link href="/css/play.css" rel='stylesheet'>
@stop



@section('content')
    <div class='container'>
        <div class='fancyboxsilver row'>
            <h2> Question Submitted </h2>
            <h5> Your new question will not show up on gameboard until vetted by an administrator.</h5>
            <h3> Thanks for contributing!</h3>
            <br />
            <button class='left-btn' onclick="window.location.href='/create'">Create Another</button>
            <button class='right-btn' onclick="window.location.href='/play'">Back to Home</button>
        </div>
    </div>
@stop
