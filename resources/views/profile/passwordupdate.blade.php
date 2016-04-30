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
                        'action' => 'ProfileController@postPasswordUpdate',
                        'class' => 'form')) !!}

                    <div class='col-md-4 profile_image_area'>
                        <img id='profile-image' src='{{ $user->profile_image }}'><br />
                        <h2> {{ $user->username }} </h2>
                    </div>
                    <div class='col-md-6 profile_info'>
                        @if(count($errors) > 0)
                            <ul class='errors'>
                                @foreach ($errors->all() as $error)
                                    <li><span class='fa fa-exclamation-circle'></span> {{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        <div class='form-group'>
                            <label for='password'>New Password</label>
                            <input type='password' name='password' id='password'>
                        </div>

                        <div class='form-group'>
                            <label for='password_confirmation'>Confirm New Password</label>
                            <input type='password' name='password_confirmation' id='password_confirmation'>
                            <br /><br />
                        </div>
                        <div class='form-group'>
                            <input type="button" class="info-btn" onclick="window.location.href='/profile'" value="Cancel">
                            {!! Form::submit('Save Changes'); !!}
                        </div>
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
