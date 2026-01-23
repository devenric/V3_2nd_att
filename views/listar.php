<!DOCTYPE html>
<html>
<head>
    <title>Listado de Criaturas</title>
</head>
<body>
    <h1>Criaturas</h1>

    <a href="index.php?accion=crear">Agregar Criatura</a>
<?php if (isset($criaturas) && !empty($criaturas)):?>
    <table border="1" cellpadding="10">
        <tr>
            <th>Nombre</th>
            <th>Especie</th>
            <th>Nivel Peligrosidad</th>
            <th>Salud</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($criaturas as $p): ?>
        <tr>
            <td><?= $p->getNombre() ?></td>
            <td><?= $p->getEspecie() ?></td>
            <td><?= $p->getNivelPeligrosidad() ?></td>
            <td><?= $p->getHealthStatus() ?></td>
            <td>
                <a href="index.php?accion=editar&nombre=<?= $p->getNombre() ?>">Editar</a>
                |
                <a href="index.php?accion=eliminar&nombre=<?= $p->getNombre() ?>">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <?php for ($i=1; $i<=$totalPaginas ; $i++):?>
        <a href="index.php?p=<?= $i ?>"><?= $i ?></a>
        <?php endfor;?>
        <?else :?>
        <p>Aún no hay criaturas registradas</p>
    <?php endif; ?>
</body>
</html>
