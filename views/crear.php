<!DOCTYPE html>
<html>
<head>
    <title>Añadir Criatura</title>
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
        <select name="tipo" id="tipo">
            <option value="Marina" >Marina</option>
            <option value="Voladora">Voladora</option>
            <option value="Terrestre">Terrestre</option>
        </select>

        <?php if ($criatura instanceof Marina): ?>
    <div class="marina">
        <label>Profundidad Máxima:</label>
        <input type="number" name="profundidadMax" value="<?= $criatura->profundidadMax ?>">
    </div>

<?php elseif ($criatura instanceof Terrestre): ?>
    <div class="terrestre">
        <label>Tipo de Terreno:</label>
        <input type="text" name="tipoTerreno" value="<?= $criatura->tipoTerreno ?>">
    </div>

<?php endif; ?>
        <button type="submit">Guardar</button>
    </form>

    <br>
    <a href="index.php">Volver</a>
</body>
</html>
