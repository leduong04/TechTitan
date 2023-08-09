<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    @yield('css')
</head>

<body id="{{$pageId}}">
    @include('User.includes.header')

    @yield('content')

    @include('User.includes.footer')



    @yield('js')
</body>

</html>