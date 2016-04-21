@extends('layouts.master')

@section('title')
    Another CTF
@stop

@section('content')
    <div class='container'>
        <div class='fancyboxsilver row'>
            <div class='col-md-4 profile_image'>
                <img id='profile_image' src='/images/defaultprofile.png'><br />
                <h2> Username </h2>
            </div>
            <div class='col-md-6 profile_info'>
                Date Joined:<br />
                Points Earned:<br />
                <br />
                Location: <br /><br /><br /><br />
                <button class='pass-btn'>Change Password</button>
            </div>
        </div>
    </div>
@stop
