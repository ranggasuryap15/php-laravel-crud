<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Link to Bootstrap --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

    {{-- link to style.css --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Laravel CRUD | @yield('title')</title>
</head>
<body>
    @yield('content')

    <script src="{{ asset('js/bootstrap.css') }}"></script>
</body>
</html>