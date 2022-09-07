<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/board.css') }}" rel="stylesheet">
    <title>어엌</title>
</head>
<body>
    <div class="mainInner">
        <div class="mainMenu">
            <ul>
                <li class="main">
                    <a href="{{ route('main') }}">메인<a>
                </li>
                <li class="menu1">
                    <a href="{{ route('board.index') }}">게시판<a>
                </li>
                <li class="menu2">
                    <a>메뉴2<a>
                </li>
                <li class="menu3">
                    <a>메뉴3<a>
                </li>
                <li class="memberMenu">
                    <div class="memberLogin">
                        <a class="login">로그인<a>
                    </div>
                    <div class="memberSingup">
                        <a class="singUp">회원가입</a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="page">

