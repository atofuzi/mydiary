<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <!-- レスポンシブ対応するためのmetaタグ -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <!-- フレームワークで自動的に生成されるcss -->
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <!-- 自分でスタイルを当てるためのcss -->
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- webフォント fontawesomeを利用するためのLinkタグ -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>
    @section('header')
    @include('common.header')
    @show
    <main id='contents'>
        @yield('content')
    </main>

    @section('footer')
    <!-- フレームワークで自動生成されるapp.js -->
    <script src="app"></script>
    <!-- 自分で動的な動きを当てるたのjsはこのmain.jsに記入している -->
    <script src="{{ mix('js/main.js')}}"></script>
    <!-- jqueryを利用するためのCDN -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    @show
</body>

</html>