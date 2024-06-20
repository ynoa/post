<?php
require_once './Controller/controller.php';

$controlador = new ControladorBlog();

// Determinar la acción a realizar
$action = isset($_GET['action']) ? $_GET['action'] : 'listar';

switch ($action) {
    case 'listar':
        $controlador->listarEntradas();
        break;
    case 'mostrar':
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        if ($id) {
            $controlador->mostrarEntrada($id);
        } else {
            echo 'ID de entrada no proporcionado.';
        }
        break;
    case 'crear':
        $controlador->crearEntrada();
        break;
    default:
        echo 'Acción no reconocida.';
        break;
}