@extends('layouts.app')
@section('title', '')
@section('content')

    @auth
        <div class="row" style="padding-top: 20px;">
            <div class="col-lg-8 col-md-7 col-sm-6">
                <div class="d-flex justify-content-end" style="margin-right: 2px;">
                    <div class="align-self-center">
                        <h5>Вы вошли как {{ Auth::user()->name }}
                        <div class="btn_custom btn-dark"><a href="/logout">Выйти</a></div></h5>
                    </div>
                </div>
            </div>

        </div>
        <br>
    @endauth
    <div id="jquery-accordion-menu" class="jquery-accordion-menu" style="padding-top: 20px;">
        <div class="jquery-accordion-menu-header">Название какое?</div>
        <ul>
            @auth
                <li><a href="/my_party"><i class="fa fa-glass"></i>Мое мероприятие</a><span
                            class="jquery-accordion-menu-label">12</span></li>
            @endauth
            <li><a href="/find_party"><i class="fa fa-glass"></i>Найти мероприятие</a><span
                        class="jquery-accordion-menu-label">12</span></li>
            <li><a href="/create_party"><i class="fa fa-file-image-o"></i>Создать мероприятие</a></li>
            <li><a href="#"><i class="fa fa-cog"></i>Как пользоваться?</a>
            <li><a href="#"><i class="fa fa-envelope"></i>Контакты</a></li>
            <li><a href="#"><i class="fa fa-user"></i>О нас</a></li>
        </ul>
    </div>
@endsection
@section('scripts')
    <script src="{{ URL::asset('js/index.js') }}"></script>
@endsection