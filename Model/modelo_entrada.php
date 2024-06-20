<?php
include_once './config/db.php';

class EntradaBlog
{
    protected $id;
    protected $autor;
    protected $contenido;
    protected $fechaCreacion;

    public function __construct($autor = '', $contenido = '', $fechaCreacion = '')
    {
        $this->autor = $autor;
        $this->contenido = $contenido;
        $this->fechaCreacion = $fechaCreacion;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAutor()
    {
        return $this->autor;
    }

    public function getContenido()
    {
        return $this->contenido;
    }

    public function getFechaCreacion()
    {
        return $this->fechaCreacion;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setAutor($autor)
    {
        $this->autor = $autor;
    }

    public function setContenido($contenido)
    {
        $this->contenido = $contenido;
    }

    public function setFechaCreacion($fechaCreacion)
    {
        $this->fechaCreacion = $fechaCreacion;
    }

    public function crearEntrada($autor, $contenido)
    {
        global $conexion;

        $fechaCreacion = date('Y-m-d H:i:s');
        $stmt = $conexion->prepare("INSERT INTO entradas (autor, contenido, fechaCreacion) VALUES (:autor, :contenido, :fechaCreacion)");
        $stmt->bindParam(':autor', $autor);
        $stmt->bindParam(':contenido', $contenido);
        $stmt->bindParam(':fechaCreacion', $fechaCreacion);
        $stmt->execute();

        $this->autor = $autor;
        $this->contenido = $contenido;
        $this->fechaCreacion = $fechaCreacion;
        $this->id = $conexion->lastInsertId();
    }

    public static function obtenerTodasEntradas()
    {
        global $conexion;
    
        $stmt = $conexion->prepare("SELECT * FROM entradas");
        $stmt->execute();
        $entradas = $stmt->fetchAll(PDO::FETCH_ASSOC); // Cambio aquí
        return $entradas;
    }
    
    public static function obtenerEntradaPorId($id)
    {
        global $conexion;

        $stmt = $conexion->prepare("SELECT * FROM entradas WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $entrada = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $entrada[0];
    }
}