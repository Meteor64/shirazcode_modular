<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
{{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.rtl.min.css" integrity="sha384-T5m5WERuXcjgzF8DAb7tRkByEZQGcpraRTinjpywg37AO96WoYN9+hrhDVoM6CaT" crossorigin="anonymous">--}}
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/font/font.css">
    <title>@yield('page-title')</title>
</head>
<body>
<main>

    <div class="account">
        @yield('content')
    </div>
</main>
</body>
</html>