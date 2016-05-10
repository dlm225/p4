@extends('layouts.master')

@section('title')
    Edit Question - Another CTF
@stop

@section('head')
    <link href="/css/create.css" rel='stylesheet'>
@stop

@section('content')
<h1>Edit question #{{ $question->id }}</h1>

<div class='container'>
    <div class='fancyboxsilver row'>
        {!! Form::open(
            array(
                'action' => 'AdminController@postEditQuestion',
                'class' => 'form')) !!}
        {!! Form::hidden('id', $question->id) !!}
        {!! Form::label('category_id', 'Category:') !!}
        {!! Form::select('category_id', $categories_for_dropdown, $question->category_id) !!}
        <div class='error'>{{ $errors->first('category_id') }}</div>
        {!! Form::label('question', 'Question:   (It may contain HTML, but no scripts)') !!}
        {!! Form::textarea('question', $question->question) !!}
        <div class='error'>{{ $errors->first('question') }}</div>
        {!! Form::label('hint1', 'Hint 1:   (It may contain HTML, but no scripts)') !!}
        {!! Form::text('hint1', $question->hint1) !!}
        <div class='error'>{{ $errors->first('hint1') }}</div>
        {!! Form::label('hint2', 'Hint 2:   (It may contain HTML, but no scripts)') !!}
        {!! Form::text('hint2', $question->hint2) !!}
        <div class='error'>{{ $errors->first('hint2') }}</div>
        {!! Form::label('flag', 'Flag:   (any phrase or string, between 3 - 64 characters)') !!}
        {!! Form::text('flag', $question->flag) !!}
        <div class='error'>{{ $errors->first('flag') }}</div>
        {!! Form::label('difficulty', 'Difficulty:') !!}
        @for ($i = 1; $i < 6; $i++)
            @if($question->difficulty == $i)
                 {{ $i }}{!!Form::radio('difficulty', $i, true) !!}
            @else
                {{ $i }}{!!Form::radio('difficulty', $i) !!}
            @endif
        @endfor
        <div class='error'>{{ $errors->first('difficulty') }}</div>
        <br />

        {!! Form::submit('Approve & Save Changes') !!}
        {!! Form::close() !!}
        <br />
        <button class="info-btn" onclick="location.href='/deletequestion/{{$question->id}}'">Delete</button><br /><br />
        <button class="info-btn" onclick="location.href='/administratequestions'">Cancel</button>
    </div>

</div>
@stop
