@extends('layouts.master')

@section('title','home')

@section('header')
@parent
@endsection
@section('content')
<div class="main-contents">
    <h2>日記を書く</h2>
    <form method="POST" action="{{ url('/register') }}" enctype="multipart/form-data">
        @csrf
        <input type="date" id="diary-date" class="diary-input diary-input-date" name="diary_date" value=""><br>
        <textarea class="diary-input diary-input-contents" name="contents" rows="15" cols="40"></textarea><br>
        <!--画像-->
        <p>写真をアップ</p>
        <div class="pic-main">
            <div class="area-drop-main js-area-drop">
                <input type="file" name="pic1" class="input-area js-file-input">
                <img class="img-area js-file-prev" src="{{ old('pic','') }}">
                画像をドラッグ&ドロップ
                <i class="fas fa-times prev-close" style="display: none;"></i>
            </div>
        </div>
        <input type="submit" class="diary-input diary-input-register" value="登録">
    </form>
</div>
@endsection

@section('footer')
@parent
@endsection