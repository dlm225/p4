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

    <div class='row row-centered'>
        <div class='questionbox'>
            {{ $question->question }}
        </div>
    </div>

    <div class='row row-centered2'>
        <div class='createdbybox'>
            <span class='createdby'>This question uploaded by {{ $question->user->username }}</span>
        </div>
    </div>

    <br />

    <div class='row row-centered'>
        <div class='col-md-4 col-md-offset-4'>
            @if($submission != NULL)
                <span class='tries'>Your attempts made on this question: {{ $submission->tries }} </span>
            @else
                <div class='tries'>You have not yet attempted this question.</div>
            @endif
        </div>
    </div>

    <div class='row row-centered'>
        @if($submission != NULL && $submission->points_awarded > 0)
            <span class='points'>You scored {{ $submission->points_awarded }} points on this question</span>
        @else
            <div class='col-lg-4 col-centered'>
                @if(Session::get('flag_msg') != null)
                   <div class='flag_message'>{{ Session::get('flag_msg') }}</div>
                @endif
                <div class='error'>{{ $errors->first('flag') }}</div>
                {!! Form::open(
                    array(
                        'action' => 'GameController@postFlag',
                        'class' => 'form')) !!}
                    {!! Form::hidden('question',$question->id)  !!}
                    {!! Form::hidden('category',$category->id) !!}
                    Flag:{!! Form::text('flag'); !!}
                    {!! Form::submit('Submit Flag'); !!}
                {!! Form::close() !!}
            </div>
        @endif
    </div>

</div>

<div class='container'>
    <div class='row fancyboxback'>
        <a href='#' onclick="history.back();">
            <div class='categorytext'>
                Go Back To Game Board
            </div>
        </a>
    </div>
</div>
@stop
