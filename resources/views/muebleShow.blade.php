<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources\css\muebleShow.css'])
    <title>:)</title>
</head>
<body>
    <h1>NOMBRE: {{$mueble -> nombre}}</h1>
    <h3>PRECIO: ${{$mueble -> precio}}</h3>
    <p>TIPO: {{$mueble->tipos[0]->nombre}}</p>
    <p>CANTIDAD: {{$mueble -> cantidad}}</p>
    <a href="/mueble/{{$mueble -> id}}/edit">Editar</a>
    <form action="/mueble/{{$mueble->id}}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value="ELIMINAR!">
    </form>
</body>
</html>