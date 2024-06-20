<!DOCTYPE html>
<html>
<head>
    <title>Lista de Entradas</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Lista de Entradas</h1>

    <table>
        <tr>
            <th>ID</th>
            <th>Autor</th>
            <th>Contenido</th>
            <th>Fecha de Creación</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($entradas as $entrada): ?>
            <tr>
                <td><?php echo $entrada['id']; ?></td> <!-- Cambio aquí -->
                <td><?php echo $entrada['autor']; ?></td> <!-- Cambio aquí -->
                <td><?php echo substr($entrada['contenido'], 0, 50) . '...'; ?></td>
                <td><?php echo $entrada['fechaCreacion']; ?></td> <!-- Cambio aquí -->
                <td>
                    <a href="index.php?action=mostrar&id=<?php echo $entrada['id']; ?>">Ver detalles</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <a href="index.php?action=crear">Crear nueva entrada</a>
</body>
</html>
