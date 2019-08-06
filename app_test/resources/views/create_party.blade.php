@extends('layouts.app')
@section('title', ' - Создать мероприятие')
@section('content')
    <form method="GET" action="/save_party" name="party" id="party" enctype="multipart/form-data">
        @csrf
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <div class="form-group">
            <small class="form-text text-muted">Название мероприятия</small>
            <input name="title" type="text" class="form-control" id="form_title" aria-describedby="emailHelp"
                   placeholder="Введите имя">
        </div>

        <div class="form-group">
            <small class="form-text text-muted">Описание мероприятия мероприятия</small>
            <textarea name="description" class="form-control rounded-0" rows="10"  placeholder="Введите описание мероприятия"></textarea>
        </div>


        <div class="form-group">
            <small class="form-text text-muted">Добавьте фото к описанию</small>
            <input name="file" type="file" class="form-control-file" multiple id="upload_photo" accept=".jpg, .jpeg, .png" onchange="onChangeInputFile(this);">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Создать</button>
        </div>
    </form>
@endsection
@section('scripts')
    <script src="{{ URL::asset('js/index.js') }}"></script>
@endsection