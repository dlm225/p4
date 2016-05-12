@extends('layouts.master')

@section('title')
    How To Play - Another CTF
@stop

@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-6 col-md-offset-3'>
                <h1>Rules</h1>
                <ol>
                    <li>Each question is worth a base of 100 points.</li>
                    <li>The base point value is multiplied by the difficulty level (1.00 to 5.00).</li>
                    <li>The difficulty level is determined by player vote.</li>
                    <li>Only players who capture a flag can vote on the difficulty level for that question.</li>
                    <li>There is a 30% penalty on points if the player uses Hint 1.</li>
                    <li>There is a 60% penalty on points if the player uses Hint 2.</li>
                    <li>Points awarded = base x difficulty x penalty (i.e. 180 = 100 x 3.00 x 0.60)</li>
                </ol>
            </div>
            <div class='col-md-6 col-md-offset-3'>
                <h1>How To Play</h1>
                <ol>
                    <li>Choose a CATEGORY from your <a href='/play'> Home</a> page.</li>
                    <li>Choose a point value in orange to see that challenge.</li>
                    <li>The challenge is in the gray box.  Figure it out, and put your best guess in the FLAG box. Hit SUBMIT.</li>
                    <li>If you are correct, you will be taken back to the CATEGORY page and you will be notified that you scored points.</li>
                    <li>If you are incorrect, you will be notified and given unlimited opportunities to try again.</li>
                </ol>
            </div>
        </div>
    </div>
@stop
