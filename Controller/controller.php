<?php
require_once './Model/modelo_entrada.php';

class ControladorBlog
{
    public function listarEntradas()
    {
        $entradas = EntradaBlog::obtenerTodasEntradas();
        // Renderizar la vista para mostrar todas las entradas
        require_once 'views/listar_entradas.php';
    }

    public function mostrarEntrada($id)
    {
        $entrada = EntradaBlog::obtenerEntradaPorId($id);
        // Renderizar la vista para mostrar los detalles de la entrada
        require_once 'views/mostrar_entrada.php';
    }

    public function crearEntrada()
    {
        // Verificar si se envió el formulario
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Obtener los datos del formulario
            $autor = $_POST['autor'];
            $contenido = $_POST['contenido'];

            $nuevaEntrada = new EntradaBlog();
            $nuevaEntrada->crearEntrada($autor, $contenido);

            // Redirigir a la página de listado de entradas
            header('Location: index.php?action=listar');
            exit();
        }

        // Renderizar la vista para mostrar el formulario de creación de entrada
        require_once 'views/crear_entrada.php';
    }
}