@extends('layouts.master')

@section('title','home')

@section('header')
@parent
@endsection
@section('content')
<div class="main-contents">
    <h2><i class="far fa-clipboard" style=" padding-right: 10px"></i>日記一覧</h2>
    @foreach ($diaries as $diary)
    <a href="edit/{{ $diary->id }}" class="list-link">
        <div class="list">
            <h3 class="list-date">{{ $diary->diary_date }}</h3>
            <div class="list-wrap">
                <div class="list-img">
                    <img src="{{ $diary->pic1 ? asset( $diary->pic1 ) : asset( 'image/default.jpg')  }}">
                </div>
                <p class="list-content">{{ $diary->contents }}</p>
            </div>
        </div>
    </a>

    @endforeach
</div>
@endsection

@section('footer')
@parent
@endsection