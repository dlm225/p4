@extends('layouts.master')

@section('title')
    Gameboard - Another CTF
@stop

@section('head')
    <link href="/css/play.css" rel='stylesheet'>
@stop

@section('content')
<h1> Category: {{ $category->category }}</h1>
<br /><br />
<div class='container'>

    <div class='row row-centered'>
        <div class='col-md-6 col-md-offset-3'>
            <h4>Point Value: {{ $question->difficulty*100 }}</h4>
        </div>
    </div>

    <br />

    <div class='row row-centered'>
        <div class='questionbox'> {{ $question->question }} </div>
    </div>

    <br />

    <div class='row row-centered'>
        <div class='col-md-4 col-md-offset-4'>
            @if($submission != NULL)
                @if($submission['hint1used'] === '1')
                    <a href='/hint1/{{ $question->id }}' class='hint1-used'>Hint 1</a>
                @else
                    <a href='/hint1/{{ $question->id }}' class='hint1-btn'>Hint 1</a>
                @endif

                @if($submission['hint2used'] === '1')
                    <a href='/hint2/{{ $question->id }}' class='hint2-used'>Hint 2</a>
                @else
                    <a href='/hint2/{{ $question->id }}' class='hint2-btn'>Hint 2</a>
                @endif
            @else
                <a href='/hint1/{{ $question->id }}' class='hint1-btn'>Hint 1</a>
                <a href='/hint2/{{ $question->id }}' class='hint2-btn'>Hint 2</a>
            @endif
        </div>
    </div>

    <br />

    <div class='row row-centered'>
        <div class='col-lg-4 col-centered'>
            <div class='error'>{{ $errors->first('flag') }}</div>
            {!! Form::open(
                array(
                    'action' => 'GameController@postFlag',
                    'class' => 'form')) !!}
                {!! Form::hidden('question',$question->id)  !!}
                Flag:{!! Form::text('flag'); !!}
                {!! Form::submit('Submit Flag'); !!}
            {!! Form::close() !!}
        </div>
    </div>

</div>

<div class='container'>
    <div class='row fancyboxback'>
        <a href='#' onclick="history.back();">
            <div class='categorytext'>
                Go Back To Questions
            </div>
        </a>
    </div>
</div>
@stop
