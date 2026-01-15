<!DOCTYPE html>
<html>
<head>
    <title>Editar Producto</title>
</head>
<body>
    <h1>Editar Producto</h1>

    <form method="POST">
        Nivel de Peligrosidad:<br>
        <input type="text" name="nivelPeligrosidad" required><br><br>
        Estado de Salud:<br>
        <input type="text" name="healthStatus" required><br><br>
        <select name="tipo" id="tipo"></select>
            <option value="Terrestre" >Terrestre</option>
            <option value="Voladora">Voladora</option>
            <option value="Marina">Marina</option>
        </select>

        <button type="submit">Actualizar</button>
    </form>

    <br>
    <a href="index.php">Volver</a>
</body>
</html>
