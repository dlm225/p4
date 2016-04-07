@extends('layouts.master')

@section('title')
    Another CTF
@stop

@section('content')
<html>
    <body>
        <div class="text-center">
            <br /><br /><br /><br />
            <h1>Sign Up Here -- It's Free!</h1>
            <br /><br />
            <form>
                Username<br /><input type="text" name="username"><br /><br />
                Email<br /><input type="text" name="email"><br /><br />
                Password<br /><input type="password" name="password"><br /><br /><br />
                <input type="submit" name="submit"><br />
            </form>
        </div>
    </body>
</html>
@stop
