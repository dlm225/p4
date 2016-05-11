@extends('layouts.master')

@section('title')
    Create a Question - Another CTF
@stop

@section('head')
    <link href="/css/create.css" rel='stylesheet'>
@stop

@section('content')
<h1>Create a new question</h1>

<div class='container'>
    <div class='fancyboxsilver row'>
        <span class='warningred'>All submitted questions will be vetted for accuracy, completeness, and applicability.</span>
        {!! Form::open(
            array(
                'action' => 'GameController@postCreateQuestion',
                'class' => 'form')) !!}

        {!! Form::label('category_id', 'Category:') !!}
        {!! Form::select('category_id', $categories_for_dropdown) !!}
        <div class='error'>{{ $errors->first('category_id') }}</div>
        {!! Form::label('question', 'Question:   (It may contain HTML, but no scripts)') !!}
        {!! Form::textarea('question') !!}
        <div class='error'>{{ $errors->first('question') }}</div>
        {!! Form::label('hint1', 'Hint 1:   (It may contain HTML, but no scripts)') !!}
        {!! Form::text('hint1') !!}
        <div class='error'>{{ $errors->first('hint1') }}</div>
        {!! Form::label('hint2', 'Hint 2:   (It may contain HTML, but no scripts)') !!}
        {!! Form::text('hint2') !!}
        <div class='error'>{{ $errors->first('hint2') }}</div>
        {!! Form::label('flag', 'Flag:   (any phrase or string, between 3 - 64 characters)') !!}
        {!! Form::text('flag') !!}
        <div class='error'>{{ $errors->first('flag') }}</div>
        {!! Form::label('difficulty', 'Difficulty:') !!}
        1{!! Form::radio('difficulty', '1', true) !!}
         2{!! Form::radio('difficulty', '2') !!}
         3{!! Form::radio('difficulty', '3') !!}
         4{!! Form::radio('difficulty', '4') !!}
         5{!! Form::radio('difficulty', '5') !!}
        <div class='error'>{{ $errors->first('difficulty') }}</div>
        <br />

        {!! Form::submit('Create') !!}
        {!! Form::close() !!}
        <br />
        <button class="info-btn" onclick="location.href='/play'">Cancel</button>
    </div>

</div>
@stop
