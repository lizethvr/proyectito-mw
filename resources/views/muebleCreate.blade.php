<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources\css\muebleCreate.css'])
    <title>Document</title>
</head>
<body>
    <form action="/mueble" method="post">
        @csrf
        <a href="/mueble">atrras</a>
        <label for="nombre" >Ingrese el nombre</label>
        <input type="text" required  name="nombre" id="nombre">
        <label for="cantidad">Cantidad</label>
        <input type="number" required name="cantidad" id="cantidad">
        <label for="precio">Precio</label>
        <input type="number" required name="precio" id="precio">
        <select name="tipos" id="">
            @foreach ( $tipos as $tipo)
                <option value="{{$tipo->id}}">{{$tipo -> nombre}}</option>
            @endforeach
        </select>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>