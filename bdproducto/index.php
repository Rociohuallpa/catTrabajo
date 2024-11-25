<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRAR PRODUCTOS</title>
</head>
<body>
    <h1>REGISTRAR PRODUCTOS</h1>
    <form action="clases/producto.php" method="post">
        <br><br>
        <label for="nombre">
            NOMBRE:
            <input type="text" id="nombre" name="nombre">
        </label>
        <br><br>
        <label for="stock">
            STOCK:
            <input type="text" id="stock" name="stock">
        </label>
        <br><br>
        <label for="precio">
            PRECIO:
            <input type="text" id="precio" name="precio">
        </label>
        <br><br>
        <input type="submit" value="Registrar producto">
    </form>
</body>
</html>