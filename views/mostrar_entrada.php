<!DOCTYPE html>
<html>
<head>
    <title>Detalles de la Entrada</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        
        h1 {
            color: #333;
        }
        
        p {
            line-height: 1.5;
        }
    </style>
</head>
<body>
    <h1>Detalles de la Entrada</h1>
    
    <?php if ($entrada): ?>
        <h2><?php echo $entrada['autor']; ?></h2>
        <p><?php echo substr($entrada['contenido'], 0, 50) . '...'; ?></p>
        <p>Fecha de Creación: <?php echo $entrada['fechaCreacion']; ?></p>
        
        <a href="index.php?action=listar">Volver a la lista</a>
    <?php else: ?>
        <p>No se encontró la entrada.</p>
    <?php endif; ?>
</body>
</html>