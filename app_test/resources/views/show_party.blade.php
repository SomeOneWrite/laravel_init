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
@endsection