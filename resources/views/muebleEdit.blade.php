<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources\css\muebleEdit.css'])
    <title>Editar</title>
</head>
<body>
    <form action="/mueble/{{$mueble -> id}}" method="post">
        @csrf
        @method('PUT')
        <a href="/mueble">atrras</a>
        <label for="nombre" >Ingrese el nombre</label>
        <input type="text" required  name="nombre" id="nombre" value="{{$mueble -> nombre}}">
        <label for="cantidad">Cantidad</label>
        <input type="number" required name="cantidad" id="cantidad" value='{{$mueble-> cantidad}}'>
        <label for="precio">Precio</label>
        <input type="number" required name="precio" id="precio" value="{{$mueble->precio}}">
        <select name="tipos" id="">
            @foreach ( $tipos as $tipo)
                <option @if ($tipo -> id == $mueble -> tipos[0]->id) selected @endif value="{{$tipo->id}}">{{$tipo -> nombre}} </option>
            @endforeach
        </select>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>