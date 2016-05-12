@extends('layouts.master')

@section('title')
    Profile - Another CTF
@stop

@section('head')
    <link href="/css/profile.css" rel='stylesheet'>
@stop


@if(Auth::user())
    @section('content')
        <div class='container'>
            <div class='fancyboxsilver row'>

                {!! Form::open(
                    array(
                        'action' => 'ProfileController@postProfileUpdate',
                        'class' => 'form',
                        'files' => true)) !!}

                    <div class='col-md-4 profile_image_area'>
                        <img id='profile-image' src='{{ $user->profile_image }}'><br />
                        {!! Form::checkbox('resetimage', 'resetimage') !!} Reset Image to Default

                        <br /> OR

                        {!! Form::file('newimage'); !!}<br />
                        <div class='error'>{{ $errors->first('newimage') }}</div>
                        Username: {!! Form::text('username', $user->username); !!}
                        <div class='error'>{{ $errors->first('username') }}</div>
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

                        Email: {!! Form::text('email', $user->email ); !!} <br />
                        <div class='error'>{{ $errors->first('email') }}</div>

                        <br />

                        Location: {!! Form::text('location', $user->location); !!} <br /><br /><br /><br />
                        <button class="info-btn" onclick="location.href='/profile'">Cancel</button>

                        {!! Form::submit('Save Changes'); !!}
                    </div>

                {!! Form::close() !!}

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
