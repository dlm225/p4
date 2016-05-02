@extends('layouts.master')

@section('head')
    <link href="/css/user.css" rel='stylesheet'>
@stop

@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-4 col-md-offset-4'>
                <p>Don't have an account? <a href='/register'> Register here...</a></p>

                <h1>Login</h1>

                @if(count($errors) > 0)
                    <ul class='errors'>
                        @foreach ($errors->all() as $error)
                            <li><span class='fa fa-exclamation-circle'></span> {{ $error }}</li>
                        @endforeach
                    </ul>
                @endif

                <form method='POST' action='/login'>

                    {!! csrf_field() !!}

                    <div class='form-group'>
                        <label for='email'>Email</label>
                        <input type='text' name='email' id='email' value='{{ old('email') }}'>
                    </div>

                    <div class='form-group'>
                        <label for='password'>Password</label>
                        <input type='password' name='password' id='password' value='{{ old('password') }}'>
                    </div>

                    <div class='form-group'>
                        <input type='checkbox' name='remember' id='remember'>
                        <label for='remember' class='checkboxLabel'>Remember me</label>
                    </div>

                    <div class='form-group'>
                        <button type='submit' class='btn login-btn'>Login</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@stop
