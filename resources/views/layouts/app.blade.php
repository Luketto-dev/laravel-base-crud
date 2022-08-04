<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('./css/app.css') }}">
    <script src="{{ asset('./js/app.js') }}"></script>
</head>
<body>
    <div class="main-container">
        @include('partials.sidebar')

        <main class="p-1">
            <div class="fs-3 fw-bold text-center">@yield('page_title')</div>
            <hr>

            <div class="main-scroll-container">
                @yield('page_content')
            </div>
        </main>
    </div>
</body>
</html>