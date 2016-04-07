@extends('layouts.master')

@section('title')
    Another CTF
@stop

@section('content')
<html>
    <body>
        <div class="text-center">
            <br /><br /><br /><br />
            <span class="glyphicon glyphicon-flag" style="font-size:200px;" aria-hidden="true"></span>
            <h1>Another CTF</h1>
            <h4>A Capture-the-Flag Training Venue</h4>
            <br /><br />
            <button class="joinbutton" onclick="location.href='/join'">Join the fun!</button>
        </div>
    </body>
</html>
@stop
