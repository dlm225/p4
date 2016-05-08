@extends('layouts.master')

@section('title')
    User Administration - Another CTF
@stop

@section('head')
    <link href="/css/profile.css" rel='stylesheet'>
@stop

@section('content')
<h1 class="normal">User Deleted Confirmation</h1>

<div class='container'>
    <div class='fancyboxsilver row'>
        <div class='col-md-6 profile_info'>
            <h3>User {{ $username }} Deleted</h3>
            <br /><br />
            <button class='info-btn' onclick="window.location.href='/administrateusers'">Continue</button>
        </div>

    </div>
</div>
@stop
