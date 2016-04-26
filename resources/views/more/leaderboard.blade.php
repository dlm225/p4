@extends('layouts.master')

@section('title')
    Leaderboard - Another CTF
@stop

@section('head')
    <link href="/css/leaderboard.css" rel='stylesheet'>
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
        @foreach($leaders as $leader)
            <div class='row'>
                <div class='col-md-8 col-md-offset-2 shadowbox'>
                    <img class='leader-profile_image' src=' {{ $leader->profile_image }} ' width='50px' height='50px'>
                    <span class='leader-username'> {{ $leader->username }} </span>
                    <span class='leader-points'> {{ $leader->points }} </span>
                    <span class='leader-last_login'> Last Login: {{ $leader->last_login }} </span>
                </div>
            </div>
        @endforeach
    </div>
@stop
