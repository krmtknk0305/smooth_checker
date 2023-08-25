<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>チェックアウト管理システム smooth checker</title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <script src="{{ asset('js/jQuery-3.7.0.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</head>
<body>
    <header>
        <h1>smooth checker</h1>
    </header>
    @yield('content')
    <footer>
        <p>作成工数 : 3人日 ※8時間を1人日とする。<p>
        <small>© 2023 Mayu Sato</small>
    </footer>
</body>
</html>
