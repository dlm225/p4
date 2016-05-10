@extends('layouts.master')

@section('title')
    Question Administration - Another CTF
@stop

@section('head')
    <link href="/css/questionlist.css" rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script type="text/javascript" src="/js/jquery-latest.js"></script>
    <script type="text/javascript" src="/js/jquery.tablesorter.min.js"></script>
@stop

@section('content')
<button class='refresh-btn' onclick="window.location.href='/administratequestions'">Refresh</button>
@if($allquestions)
    <h1 class="normal">Unvalidated Questions</h1>
    <div id="tablewrapperred">
        <table id="keywords" cellspacing="0" cellpadding="0">
        <thead>
            <tr>
                <th><span>ID</span></th>
                <th><span>Category</span></th>
                <th><span>Question</span></th>
                <th><span>Flag</span></th>
                <th><span>Hint 1</span></th>
                <th><span>Hint 2</span></th>
                <th><span>Difficulty</span></th>
                <th><span>Creator</span></th>
                <th><span>Edit</span></th>
                <th><span>Delete</span></th>
            </tr>
        </thead>
        <tbody>
            @foreach($allquestions as $question)
                @if($question->approved == '0')
                <tr>
                    <td>{{ $question->id }}</td>
                    <td>{{ $question->category->category}}</td>
                    <td class="lalign question">{{ $question->question }}</td>
                    <td class="lalign flag">{{ $question->flag }}</td>
                    <td class="lalign hint">{{ $question->hint1 }}</td>
                    <td class="lalign hint">{{ $question->hint2 }}</td>
                    <td>{{ $question->difficulty }}</td>
                    <td>{{ $question->user->username }}</td>
                    <td>
                        <a href="/editquestion/{{ $question->id }}">
                            <span class="fa fa-pencil-square-o black" aria-hidden="true"></span>
                        </a>
                    </td>
                    <td>
                        <a href="/deletequestion/{{ $question->id }}">
                            <span class="glyphicon glyphicon-trash black" aria-hidden="true"></span>
                        </a>
                    </td>
                </tr>
                @endif
            @endforeach
        </tbody>
        </table>
    </div>
    <h1 class="normal">Validated Questions</h1>
    <div id="tablewrappergreen">
        <table id="keywords" cellspacing="0" cellpadding="0">
        <thead>
            <tr>
                <th><span>ID</span></th>
                <th><span>Category</span></th>
                <th><span>Question</span></th>
                <th><span>Flag</span></th>
                <th><span>Hint 1</span></th>
                <th><span>Hint 2</span></th>
                <th><span>Difficulty</span></th>
                <th><span>Creator</span></th>
                <th><span>Edit</span></th>
                <th><span>Delete</span></th>
            </tr>
        </thead>
        <tbody>
            @foreach($allquestions as $question)
                @if($question->approved == '1')
                <tr>
                    <td>{{ $question->id }}</td>
                    <td>{{ $question->category->category}}</td>
                    <td class="lalign question">{{ $question->question }}</td>
                    <td class="lalign flag">{{ $question->flag }}</td>
                    <td class="lalign hint">{{ $question->hint1 }}</td>
                    <td class="lalign hint">{{ $question->hint2 }}</td>
                    <td>{{ $question->difficulty }}</td>
                    <td>{{ $question->user->username }}</td>
                    <td>
                        <a href="/editquestion/{{ $question->id }}">
                            <span class="fa fa-pencil-square-o black" aria-hidden="true"></span>
                        </a>
                    </td>
                    <td>
                        <a href="/deletequestion/{{ $question->id }}">
                            <span class="glyphicon glyphicon-trash black" aria-hidden="true"></span>
                        </a>
                    </td>
                </tr>
                @endif
            @endforeach
        </tbody>
        </table>
    </div>
@else
    <div class='container'>
        <div class='col-sm-7 col-centered'>
            <h3>No unvalidated questions in database.</h3>
        </div>
    </div>
@endif
    <script>$(function(){$('#keywords').tablesorter();});</script>
@stop
