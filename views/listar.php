<!DOCTYPE html>
<html>
<head>
    <title>Listado de Criaturas</title>
</head>
<body>
    <h1>Criaturas</h1>

    <a href="index.php?accion=crear">Agregar Producto</a>
<?php if (isset($criaturas) && empty($criaturas)):?>
    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Formato</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($criaturas as $p): ?>
        <tr>
            <td><?= $p->getId() ?></td>
            <td><?= $p->getNombre() ?></td>
            <td><?= $p->getFormato() ?></td>
            <td>
                <a href="index.php?accion=editar&id=<?= $p->getId() ?>">Editar</a>
                |
                <a href="index.php?accion=eliminar&id=<?= $p->getId() ?>">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <?php else:?>
        <p>Aún no hay criaturas registradas</p>
    <?php endif; ?>
</body>
</html>
