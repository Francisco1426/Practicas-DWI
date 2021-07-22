<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu</title>
    <link rel="stylesheet" href="https://cdnj.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>

    <style>
        body{
            margin-block: 20px;
            margin-top: 100px;
            margin-left: 70px;
            text-align: center;
        }
        .btn{
            width: 170px;
            height: 50px;
        }

    </style>
</head>
<body>

        <h1>Practicas Desarrollo Web Integral</h1>
        <br>

        <a href="{{route('index')}}" class="btn btn-primary">Inicio</a><br><br>
        <a href="{{route('productos')}}" class="btn btn-warning">Productos</a><br><br>
        <a href="{{route('qrcode')}}" class="btn btn-secondary">Escanear Codigo QR</a><br><br>
        <a href="{{url('escanerqr')}}" class="btn btn-danger">Escaner</a>
</body>
</html>