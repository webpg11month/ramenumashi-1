<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'RamenUmashi') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- 初期設定 -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ラーメン検索とラーメン空き情報を確認できる">
    <!-- CSS読込み -->
    <link href="/../css/shop/header.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link href="/../css/ress.css" rel="stylesheet">
    <!-- ファビコン -->
    <link rel="icon" type="img/png" href="/img/favicon/favicon.png">
    <!-- タイトル -->
    <title>RamenUmashi | @yield('title')</title>
</head>
<body>
  @yield('header-shop')
</body>
</html>