<?php

class Vivienda
{

    private $idVivienda;

    private $idDireccion;

    private $descripcion;

    private $superficie;

    private $bannos;

    private $caracteristicas;

    private $tipo;

    private $estado;

    private $habitaciones;

    private $idUsuario;

    private $planta;

    private $precio;

    private $portada;

    private $construida;

    private $operacion;
    
    private $imagenes;

    /**
     * @return mixed
     */
    public function getImagenes()
    {
        return $this->imagenes;
    }

    /**
     * @param mixed $imagenes
     */
    public function setImagenes($imagenes)
    {
        $this->imagenes = $imagenes;
    }

    /* CONSTRUCTORES */
    public function __construct($idVivienda, $idDireccion, $descripcion, $superficie, $bannos, $caracteristicas, $tipo, $estado, $habitaciones, $idUsuario, $planta, $precio, $portada, $construida, $operacion,$imagenes)
    {
        $this->setIdVivienda($idVivienda);
        $this->setidDireccion($idDireccion);
        $this->setDescripcion($descripcion);
        $this->setSuperficie($superficie);
        $this->setBannos($bannos);
        $this->setCaracteristicas($caracteristicas);
        $this->setTipo($tipo);
        $this->setEstado($estado);
        $this->setHabitaciones($habitaciones);
        $this->setIdUsuario($idUsuario);
        $this->setPlanta($planta);
        $this->setPrecio($precio);
        $this->setPortada($portada);
        $this->setConstruida($construida);
        $this->setOperacion($operacion);
        $this->setImagenes($imagenes);
    }

    
    /**
     *
     * @return mixed
     */
    public function getPortada()
    {
        return $this->portada;
    }

    /**
     *
     * @param mixed $protada
     */
    public function setPortada($portada)
    {
        $this->portada = $portada;
    }

    /* GETTERS Y SETTERS */

    /**
     *
     * @return mixed
     */
    public function getBannos()
    {
        return $this->bannos;
    }

    /**
     *
     * @return mixed
     */
    public function getCaracteristicas()
    {
        return $this->caracteristicas;
    }

    /**
     *
     * @return mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     *
     * @return mixed
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     *
     * @return mixed
     */
    public function getHabitaciones()
    {
        return $this->habitaciones;
    }

    /**
     *
     * @return mixed
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     *
     * @return mixed
     */
    public function getPlanta()
    {
        return $this->planta;
    }

    /**
     *
     * @return mixed
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     *
     * @param mixed $bannos
     */
    public function setBannos($bannos)
    {
        $this->bannos = $bannos;
    }

    /**
     *
     * @param mixed $caracteristicas
     */
    public function setCaracteristicas($caracteristicas)
    {
        $this->caracteristicas = $caracteristicas;
    }

    /**
     *
     * @param mixed $tipo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    /**
     *
     * @param mixed $estado
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    }

    /**
     *
     * @param mixed $habitaciones
     */
    public function setHabitaciones($habitaciones)
    {
        $this->habitaciones = $habitaciones;
    }

    /**
     *
     * @param mixed $idUsuario
     */
    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;
    }

    /**
     *
     * @param mixed $planta
     */
    public function setPlanta($planta)
    {
        $this->planta = $planta;
    }

    /**
     *
     * @param mixed $precio
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }

    public function getIdVivienda()
    {
        return $this->idVivienda;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function getSuperficie()
    {
        return $this->superficie;
    }

    public function setIdVivienda($idVivienda)
    {
        $this->idVivienda = $idVivienda;
    }

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    public function setSuperficie($superficie)
    {
        $this->superficie = $superficie;
    }

    /**
     *
     * @return mixed
     */
    public function getIdDireccion()
    {
        return $this->idDireccion;
    }

    /**
     *
     * @return mixed
     */
    public function getConstruida()
    {
        return $this->construida;
    }

    /**
     *
     * @return mixed
     */
    public function getOperacion()
    {
        return $this->operacion;
    }

    /**
     *
     * @param mixed $idDireccion
     */
    public function setIdDireccion($idDireccion)
    {
        $this->idDireccion = $idDireccion;
    }

    /**
     *
     * @param mixed $construida
     */
    public function setConstruida($construida)
    {
        $this->construida = $construida;
    }

    /**
     *
     * @param mixed $operacion
     */
    public function setOperacion($operacion)
    {
        $this->operacion = $operacion;
    }
}
?>