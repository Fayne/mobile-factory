@extends('layouts.minimal')

@section('content')


    <div id='headContain'>
        <div class='mission'>
            <span>F</span>ANUC ROBOT & ROCKWELL AUTOMATIO<span>N</span>
        </div>
        <h1>移动工厂</h1>
    </div>

    <ul id='nav'>
        <li><a href='#one'>关于我们</a></li>
        <li><a href='#two'>为什么</a></li>
        <li><a href='{{ route('dashboard.login') }}'>进入</a></li>
    </ul>

    <div class='content' id='one'>
        Because FANUC ROBOT & ROCKWELL AUTOMATION ...
    </div>

    <div class='content' id='two'>
        Mobile factory is fantastic.
    </div>

    <div class='content' id='three'>

    </div>
@stop