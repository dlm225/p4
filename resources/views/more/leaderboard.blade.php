@extends('layouts.master')

@section('title')
    Leaderboard - Another CTF
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
        <div class='row'>
            <div class='col-md-8 col-md-offset-2 shadowbox'>
                <span class='leader-text'> 1 </span>
                <img class='leader-pic' src='/images/defaultprofile.png' width='50px' height='50px'>
                <span class='leader-text'> Username 1</span>
                <span class='leader-text'> Points: 2342342</span>
                <span class='leader-text'> Last Login: 42 days ago</span>
            </div>
        </div>
        <br />
        <div class='row'>
            <div class='col-md-8 col-md-offset-2 shadowbox'>
                <span class='leader-text'> 2 </span>
                <img class='leader-pic' src='/images/defaultprofile.png' width='50px' height='50px'>
                <span class='leader-text'> Username 2</span>
                <span class='leader-text'> Points: 2342342</span>
                <span class='leader-text'> Last Login: 3 days ago</span>
            </div>
        </div>
    </div>
@stop
