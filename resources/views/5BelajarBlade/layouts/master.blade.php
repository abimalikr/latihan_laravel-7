<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}"

></head>

<body>
    @include('5BelajarBlade.layouts.navigation')
   <div class="py-2"></div>
    @yield('content')

    <style>
        body{background-color: cadetblue;}
    </style>

    @yield('script')
</body>
</html>
