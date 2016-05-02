@extends('layouts.master')

@section('title')
    Gameboard - Another CTF
@stop

@section('head')
    <link href="/css/gameboard.css" rel='stylesheet'>
@stop

@section('content')
    <div class='container leader-container'>
        <div class='row'>
            <div class='col-md-6 col-md-offset-3 centerbox'>
                <img src='/images/trophy.png' width='75px' height='75px'>
                <span class='title-text'> Leaderboard </span>
                <img src='/images/trophy.png' width='75px' height='75px'>
            </div>
        </div>
    </div>
@stop
