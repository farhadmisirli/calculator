<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Document</title>
    <style>
        #home_button {
            position: absolute;
            top: 10px;
            left: 10px;
        }
    </style>
</head>
<body>
    @yield('content')
    <a class="btn btn-default btn-lg" href="/" role="button" id="home_button">Düsturlar</a>
</body>
</html>