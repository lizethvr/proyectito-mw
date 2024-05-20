<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/muebleIndex.css'])
    <title>Listado</title>
</head>
<body>
   <a href="/mueble/create">Agregar mueble</a>
   <table>
        <tr>
            <th>id</th>
            <th>Nombre</th>
            <th>Cantidad</th>
            <th>Precio</th>
            <th>Tipo</th>
            <th>Acción</th>
        </tr>
        @foreach ($muebles as $mueble)
            <tr>
                <td>{{$mueble->id}}</td>
                <td>{{$mueble->nombre}}</td>
                <td>{{$mueble->cantidad}}</td>
                <td>{{$mueble->precio}}</td>
                <td>{{$mueble->tipos[0]->nombre}}</td>
                <td><a href="/mueble/{{$mueble->id}}">Ver</a></td>
            </tr>
        
        @endforeach
   </table>
</body>
</html>