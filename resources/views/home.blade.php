 @include('header')
{{-- @include('footer') --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="flexContainer">
    @yield('header')
    <main>
        @yield('content')
    </main>
    @yield('footer')
</body>
</html>