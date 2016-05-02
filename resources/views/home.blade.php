@extends('layouts.master')

@section('title')
    Categories - Another CTF
@stop

@section('head')
    <link href="/css/home.css" rel='stylesheet'>
    <link href="/css/style.css" rel='stylesheet' />
@stop

@section('content')
<h1>Progress</h1>

<h3>Choose a topic...</h3>



<div class='container'>
    <div class='row-centered'>
        <div class='col-xs-4 col-centered fancycategorybox'>
            <div class='categorytext'>Encoding</div>
        </div>

        <div class='col-xs-4 col-centered fancycategorybox'>
            <div class='categorytext'>Encryption</div>
        </div>

        <div class='col-xs-4 col-centered fancycategorybox'>
            <div class='categorytext'>Networking</div>
        </div>
        <div class='col-xs-4 col-centered fancycategorybox'>
            <div class='categorytext'>File Forensics</div>
        </div>
    </div>
    <div class='row-centered'>
        <div class='col-xs-4 col-centered fancycategorybox'>
            <div class='categorytext'>Malware Analysis</div>
        </div>

        <div class='col-xs-4 col-centered fancycategorybox'>
            <div class='categorytext'>Packet Analysis</div>
        </div>

        <div class='col-xs-4 col-centered fancycategorybox'>
            <div class='categorytext'>HDD Forensics</div>
        </div>
        <div class='col-xs-4 col-centered fancycategorybox'>
            <div class='categorytext'>Image Analysis</div>
        </div>
    </div>
    <div class='row-centered'>
        <div class='col-xs-4 col-centered fancycategorybox'>
            <div class='categorytext'>Programming</div>
        </div>

        <div class='col-xs-4 col-centered fancycategorybox'>
            <div class='categorytext'>Hashing</div>
        </div>

        <div class='col-xs-4 col-centered fancycategorybox'>
            <div class='categorytext'>SSH-Fu</div>
        </div>
        <div class='col-xs-4 col-centered fancycategorybox'>
            <div class='categorytext'>Ports & Protocols</div>
        </div>
    </div>
</div>
@stop
