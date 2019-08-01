@extends('layouts.app')
@section('title', '')
@section('content')
    <div class="colors">
        <a class="default" href="javascript:void(0)"></a>
        <a class="blue" href="javascript:void(0)"></a>
        <a class="green" href="javascript:void(0)"></a>
        <a class="red" href="javascript:void(0)"></a>
        <a class="white" href="javascript:void(0)"></a>
        <a class="black" href="javascript:void(0)"></a>
    </div>
    <div id="jquery-accordion-menu" class="jquery-accordion-menu">
        <div class="jquery-accordion-menu-header">Название какое?</div>
        <ul>
            <li><a href="/find_party"><i class="fa fa-glass"></i>Найти мероприятие</a><span class="jquery-accordion-menu-label">12</span></li>
            <li><a href="/create_party"><i class="fa fa-file-image-o"></i>Создать мероприятие</a></li>
            <li><a href="#"><i class="fa fa-cog"></i>Как пользоваться?</a>
            <li><a href="#"><i class="fa fa-envelope"></i>Контакты</a></li><li><a href="#"><i class="fa fa-user"></i>О нас</a></li>
        </ul>
    </div>
@endsection