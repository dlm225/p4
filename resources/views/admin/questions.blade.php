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
<h1 class="normal">Unvalidated Questions</h1>

@if($needvalidated)
    <div id="tablewrapper">
        <table id="keywords" cellspacing="0" cellpadding="0">
        <thead>
            <tr>
                <th><span>Question ID</span></th>
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
            @foreach($needvalidated as $unvalidated)
            <tr>
                <td>{{ $unvalidated->id }}</td>
                <td>{{ $unvalidated->category_id }}</td>
                <td class="lalign question">{{ $unvalidated->question }}</td>
                <td class="lalign flag">{{ $unvalidated->flag }}</td>
                <td class="lalign hint">{{ $unvalidated->hint1 }}</td>
                <td class="lalign hint">{{ $unvalidated->hint2 }}</td>
                <td>{{ $unvalidated->difficulty }}</td>
                <td>{{ $unvalidated->createdby }}</td>
                <td>
                    <a href="/editquestion/{{ $unvalidated->id }}">
                        <span class="fa fa-pencil-square-o black" aria-hidden="true"></span>
                    </a>
                </td>
                <td>
                    <a href="/deletequestion/{{ $unvalidated->id }}">
                        <span class="glyphicon glyphicon-trash black" aria-hidden="true"></span>
                    </a>
                </td>
            </tr>
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
