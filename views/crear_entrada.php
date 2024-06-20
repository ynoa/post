<!DOCTYPE html>
<html>
<head>
    <title>Crear Nueva Entrada</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        
        form {
            max-width: 500px;
        }
        
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        
        input[type="text"],
        textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }
        
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Crear Nueva Entrada</h1>
    
    <form method="POST" action="index.php?action=crear">
        <label for="autor">Autor:</label>
        <input type="text" id="autor" name="autor" required>
        
        <label for="contenido">Contenido:</label>
        <textarea id="contenido" name="contenido" rows="5" required></textarea>
        
        <input type="submit" value="Crear Entrada">
    </form>
</body>
</html>