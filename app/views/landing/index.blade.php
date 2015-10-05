@extends('layouts.minimal')

@section('content')


    <div id='headContain'>
        <div class='mission'>
            欢迎光临上海2015工博会
        </div>
        <h1>Fanuc展台</h1>
    </div>

    <ul id='nav'>
        <li><a href='{{ route('dashboard.login') }}'>进入后台</a></li>
    </ul>


    <div class='content' id='three'>

    </div>
    
    <div class="bottom logo_container">
        <div>
            <a href="http://www.shanghai-fanuc.com.cn/" target="_blank">
                <img src="/src/img/Fanuc_Robot.png" alt="Fanuc">
            </a>
        </div>
        <div>
            <a href="http://www.rockwellautomation.com/" target="_blank">
                <img src="/src/img/Rockwell.png" alt="Rockwell">
            </a>
        </div>
    </div>
@stop