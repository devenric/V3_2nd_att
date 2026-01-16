<!DOCTYPE html>
<html>
<head>
    <title>Añadir Criatura</title>
    <script>
        function mostrarCampos() {
            const tipo = document.getElementById('tipo').value;
            document.getElementById('marina').style.display = tipo === 'Marina' ? 'block' : 'none';
            document.getElementById('voladora').style.display = tipo === 'Voladora' ? 'block' : 'none';
            document.getElementById('terrestre').style.display = tipo === 'Terrestre' ? 'block' : 'none';
        }
        window.onload = mostrarCampos;
    </script>
</head>
<body>
    <h1>Añadir Criatura</h1>

    <form method="POST"> <!-- form -->
        Nombre:<br>
        <input type="text" name="nombre" required><br><br>
        Especie:<br>
        <input type="text" name="especie" required><br><br>
        Nivel de Peligrosidad:<br>
        <input type="text" name="nivelPeligrosidad" required><br><br>
        Estado de Salud:<br>
        <input type="text" name="healthStatus" required><br><br>
        Tipo:<br>
        <select name="tipo" id="tipo" onchange="mostrarCampos()">
            <option value="Marina">Marina</option>
            <option value="Voladora">Voladora</option>
            <option value="Terrestre">Terrestre</option>
        </select><br><br>

        <div id="marina" style="display:none;">
            <label>Profundidad Máxima:</label>
            <input type="number" name="profundidadMax" value="0"><br><br>
        </div>

        <div id="voladora" style="display:none;">
            <label>Envergadura de Alas:</label>
            <input type="number" name="envergaduraAlas" value="0"><br><br>
        </div>

        <div id="terrestre" style="display:none;">
            <label>Tipo de Terreno:</label>
            <input type="text" name="tipoTerreno"><br><br>
        </div>

        <button type="submit">Guardar</button>
    </form>

    <br>
    <a href="index.php">Volver</a>
</body>
</html>
