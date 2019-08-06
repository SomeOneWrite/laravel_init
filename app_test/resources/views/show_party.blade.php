@extends('layouts.app')
@section('title', ' - Моё мероприятие')
@section('content')
    @foreach ($partys as $party)
        <div class="card">
            <div class="row" style="margin: 5px;">
                @foreach ($party['photos'] as $photo)
                    <div class="col-6">
                        <img class="card-img-top" src="{{$photo->data}}" width="100%" height="100%" style="padding: 2px;" alt="Фото">
                    </div>
                @endforeach
            </div>
            <div class="card-body">
                <h5 class="card-title">{{$party["party"]->title}}</h5>
                <p class="card-text">{{$party["party"]->description}}</p>
                <a href="/delete_party" class="btn btn-primary">Удалить</a>
            </div>
        </div>
    @endforeach
    @empty($partys)
        <div>
            <div class="row" style="padding-top: 50px;">
                <div class="col-lg-8 col-md-7 col-sm-6">
                    <div class="d-flex justify-content-center" style="margin-right: 2px;">
                        <div class="align-self-center">
                            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                                <a class="navbar-brand" href="#">Не удалось найти мероприятия</a>
                                <button class="btn btn-secondary my-2 my-sm-0" ><a href="/">Назад</a></button>
                                <div class="collapse navbar-collapse" id="navbarColor02">
                                </div>
                            </nav>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    @endempty
@endsection