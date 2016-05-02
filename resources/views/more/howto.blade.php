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
                    <li>Each question is worth a base of 50 points.</l1>
                    <li>The base point value is multiplied by the difficulty level (1.00 to 5.00).</li>
                    <li>The difficulty level is determined by player vote.</li>
                    <li>Only players who capture a flag can vote on the difficulty level for that question.</li>
                    <li>There is a 25% penalty on points if the player uses Hint 1.</li>
                    <li>There is a 60% penalty on points if the player uses Hint 2.</li>
                    <li>Points awarded = base x difficulty x penalty (i.e. 90 = 50 x 3.00 x 0.60)</li>
                </ol>
            </div>
            <div class='col-md-6 col-md-offset-3'>
                <h1>How To Play</h1>
                <ol>
                    <li>Choose a CATEGORY from your <a href='/home'> Home</a> page.</l1>
                    <li>asdf</li>
                    <li>adsf</li>
                    <li>dsf</li>
                </ol>
            </div>
        </div>
    </div>
@stop
