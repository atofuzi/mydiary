@extends('layouts.master')

@section('title','home')

@section('header')
@parent
@endsection
@section('content')
<div class="header-img"></div>
<div class="main-contents">
    <h2><i class="fas fa-book-open" style="padding-right: 10px;"></i>最近の日記</h2>
    <div class="diary-box">
        <table>
            <tbody>
                @foreach ($diaries as $diary)
                <tr>
                    <td>{{$diary->diary_date}}</td>
                    <td>{{$diary->contents}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('footer')
@parent
@endsection