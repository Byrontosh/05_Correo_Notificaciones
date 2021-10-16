<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Contenido del Email</h2>
    <br>
    Asunto: {{$msg['asunto']}}
    <br>
    <br>
    Recibiste un correo de: {{$msg['nombre']}} - {{$msg['apellido']}} - {{$msg['correo']}}
    <br>
    <br>
    Detalle: {{$msg['mensaje']}}
    <br>
    <img src="https://i.pinimg.com/originals/bb/53/0f/bb530fa1fa6e5c1d9b5c9977652c11c6.jpg" alt="">
</body>

</body>

</html>