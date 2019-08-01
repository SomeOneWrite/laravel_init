@extends('layouts.app')
@section('title', ' - Найти мероприятие')
@section('content')
    @foreach ($partys as $party)
    <div class="card">
        @foreach ($party['photos'] as $photo)
        <img class="card-img-top" src="data:image/gif;base64,{{$photo->data}}" alt="Фото">
        @endforeach
        <div class="card-body">
            <h5 class="card-title">{{$party["party"]->title}}</h5>
            <p class="card-text">{{$party["party"]->description}}</p>
            <a href="#" class="btn btn-primary">Откликнуться</a>
        </div>
    </div>
    @endforeach
@endsection