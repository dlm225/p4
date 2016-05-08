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

        {!! Form::open(
            array(
                'action' => 'GameController@postCreateQuestion',
                'class' => 'form')) !!}

        {!! Form::label('category', 'Category:') !!}
        {!! Form::select('category', $categories_for_dropdown) !!}
        <div class='error'>{{ $errors->first('category_id') }}</div>
        <br />
        {!! Form::label('question', 'Question:   (It may contain HTML, but no scripts)') !!}
        {!! Form::text('question') !!}
        <div class='error'>{{ $errors->first('category_id') }}</div>
        <br />
        {!! Form::close() !!}

    </div>
</div>
@stop
