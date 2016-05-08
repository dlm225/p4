@extends('layouts.master')

@section('title')
    User Administration - Another CTF
@stop

@section('head')
    <link href="/css/userlist.css" rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script type="text/javascript" src="/js/jquery-latest.js"></script>
    <script type="text/javascript" src="/js/jquery.tablesorter.min.js"></script>
@stop

@section('content')
<h1 class="normal">Administrate Users</h1>

@if($userlist)
    <div id="wrapper">
        <table id="keywords" cellspacing="0" cellpadding="0">
        <thead>
            <tr>
                <th><span>User ID</span></th>
                <th><span>Username</span></th>
                <th class='email'><span>Email</span></th>
                <th><span>Points</span></th>
                <th><span>Can Create?</span></th>
                <th><span>Is Admin?</span></th>
                <th><span>Delete User</span></th>
            </tr>
        </thead>
        <tbody>
            @foreach($userlist as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td class="lalign">{{ $user->username }}</td>
                <td class="lalign email">{{ $user->email }}</td>
                <td class="lalign points">{{ $user->points }}</td>
                @if($user->points > 5000)
                    <td>YES</td>
                @else
                    <td>---</td>
                @endif
                @if($user->is_admin)
                    <td>ADMIN</td>
                @else
                    <td>---</td>
                @endif
                <td>
                    <a href="/deleteuser/{{ $user->id }}">
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
            <h3>No users in database.</h3>
        </div>
    </div>
@endif
    <script>$(function(){$('#keywords').tablesorter();});</script>
@stop
