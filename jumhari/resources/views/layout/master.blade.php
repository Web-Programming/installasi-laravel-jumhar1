<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{{$kampus}}</h1>
    <hr/>

    @yield('content')

    <hr>
    &copy; {{date("Y")}} || Universitas MDP
</body>
</html>