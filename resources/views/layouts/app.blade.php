<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posty</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body class="bg-gray-100">
    <nav class="p-6 bg-white flex justify-between">
        <li><a href="">Home</a></li>
        <li><a href="">Dashboard</a></li>
        <li><a href="">Post</a></li>
    </nav>
    @yield('content')
</body>

</html>