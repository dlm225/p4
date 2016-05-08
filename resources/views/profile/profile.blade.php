@extends('layouts.master')

@section('title')
    Profile - Another CTF
@stop

@section('head')
    <link href="/css/profile.css" rel='stylesheet'>
@stop


@if(Auth::check())
    @section('content')
        <div class='container'>
            <div class='fancyboxsilver row'>
                <div class='col-md-4 profile_image_area'>
                    <img id='profile-image' src='{{ $user->profile_image }}'><br />
                    <h2> {{ $user->username }} </h2>
                </div>
                <div class='col-md-6 profile_info'>
                    Date Joined: {{ $user->created_at->format('m/d/Y') }} <br />
                    <br />
                    Points Earned: {{ $user->points }} <br />
                    @if($user->last_points = '0000-00-00')
                        Last Points Earned: Never!<br />
                    @else
                        Last Points Earned: {{ $user->last_points->format('m/d/Y') }}<br />
                    @endif
                    <br />
                    Email: {{ $user->email }} <br />
                    <br />
                    Location: {{ $user->location }} <br /><br /><br /><br />
                    <button class='info-btn' onclick="window.location.href='/profileupdate'">Change Profile Info</button>
                    <button class='pass-btn' onclick="window.location.href='/passwordupdate'">Change Password</button>
                </div>
            </div>
        </div>
    @stop
@else
    @section('content')
        <div class='container'>
            <div class='fancyboxsilver row'>
                <div class='col-md-4 profile_image'>
                    <img id='profile-image' src='/images/defaultprofile.png'><br />
                    <h2> No user logged in </h2>
                </div>
            </div>
        </div>
    @stop
@endif
