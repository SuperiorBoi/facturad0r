<!DOCTYPE html>
<html>
<head>
    <title>Boleta</title>
</head>
<body>
    <h1>Boleta de Venta</h1>
    <p>Número de Boleta: {{ $venta->id }}</p>
    <table>
        <thead>
            <tr>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            @foreach($venta->productos as $producto)
                <tr>
                    <td>{{ $producto->producto->nombre }}</td>
                    <td>{{ $producto->cantidad }}</td>
                    <td>{{ $producto->precio_venta }}</td>
                    <td>{{ $producto->cantidad * $producto->precio_venta }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <p>Total: {{ $venta->total }}</p>
</body>
</html>