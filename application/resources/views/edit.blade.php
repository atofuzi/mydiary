@extends('layouts.master')

@section('title','home')

@section('header')
@parent
@endsection
@section('content')
<div class="container">
    <h2>日記を編集する</h2>
    <form method="POST" action="/update/{{ $diary->id }}" enctype="multipart/form-data">
        @csrf
        <input type="date" id="diary-date" class="diary-input diary-input-date" name="diary_date" value="{{ $diary->diary_date  }}"><br>
        <textarea class="diary-input diary-input-contents" name="contents" rows="15" cols="40">{{ $diary->contents }}</textarea><br>
        <!--画像-->
        <p>写真をアップ</p>
        <div class="pic-main">
            <div class="area-drop-main js-area-drop">
                <input type="file" name="pic1" class="input-area js-file-input">
                <img class="img-area js-file-prev" src="{{ asset($diary->pic1)  }}">
                画像をドラッグ&ドロップ
                <i class="fas fa-times prev-close" style="display: none;"></i>
            </div>
        </div>
        <input type="submit" class="diary-input diary-input-register" value="更新">
    </form>
</div>
@endsection

@section('footer')
@parent
@endsection