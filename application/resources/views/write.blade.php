@extends('layouts.master')

@section('title','home')

@section('header')
@parent
@endsection
@section('content')
<div class="container">
    <h2>日記を書く</h2>
    <form method="POST" action="{{ url('/register') }}">
        @csrf
        <input type="date" id="diary-date" class="diary-input diary-input-date" name="diary_date" value=""><br>
        <textarea class="diary-input diary-input-contents" name="contents" rows="10" cols="40"></textarea><br>
        <input type="submit" class="diary-input diary-input-register" value="登録">
    </form>
</div>
@endsection

@section('footer')
@parent
@endsection