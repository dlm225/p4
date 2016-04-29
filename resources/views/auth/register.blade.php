@extends('layouts.master')

@section('head')
    <link href="/css/user.css" rel='stylesheet'>
@stop

@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-4 col-md-offset-4'>

                <p>Already have an account? <a href='/login'>Login here...</a></p>

                <h1>Register</h1>

                @if(count($errors) > 0)
                    <ul class='errors'>
                        @foreach ($errors->all() as $error)
                            <li><span class='fa fa-exclamation-circle'></span> {{ $error }}</li>
                        @endforeach
                    </ul>
                @endif

                <form method='POST' action='/register'>
                    {!! csrf_field() !!}

                    <div class='form-group'>
                        <label for='username'>Username</label>
                        <input type='text' name='username' id='username' value='{{ old('username') }}'>
                    </div>

                    <div class='form-group'>
                        <label for='email'>Email</label>
                        <input type='text' name='email' id='email' value='{{ old('email') }}'>
                    </div>

                    <div class='form-group'>
                        <label for='password'>Password</label>
                        <input type='password' name='password' id='password'>
                    </div>

                    <div class='form-group'>
                        <label for='password_confirmation'>Confirm Password</label>
                        <input type='password' name='password_confirmation' id='password_confirmation'>
                    </div>

                    <button type='submit' class='btn login-btn'>Register</button>

                </form>
            </div>
        </div>
    </div>
@stop
