<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=divice width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Mesa de Parte</h1>
    <p>Archivos recibidos por la mesa de partes
    </p>
    <p><strong >Nombre: </strong>{{$contacto['name']}}</p>
    <p><strong >Correo: </strong>{{$contacto['mail']}}</p>
    <p><strong >DNI: </strong>{{$contacto['DNI']}}</p>
    <p><strong >Celular: </strong>{{$contacto['Celular']}}</p>
    <p><strong >Asunto: </strong>{{$contacto['subject']}}</p>
    <p><strong >Mensaje: </strong>{{$contacto['message']}}</p>
    <p><strong >Archivo Adjunto: </strong>{{$contacto['file']}}</p>
</body>
</html>