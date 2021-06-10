<?php

class Usuario
{

    private $idUsuario;

    private $nombre;

    private $email;

    private $apellido1;

    private $apellido2;

    private $telefono1;

    private $telefono2;

    private $codigoCookie;

    private $contrasenna;

    /* CONSTRUCTORES */
    public function __construct($idUsuario, $nombre, $email, $apellido1, $apellido2, $telefono1, $telefono2, $codigoCookie, $contrasenna)
    {
        $this->setIdUsuario($idUsuario);
        $this->setNombre($nombre);
        $this->setEmail($email);
        $this->setApellido1($apellido1);
        $this->setApellido2($apellido2);
        $this->setTelefono1($telefono1);
        $this->setTelefono2($telefono2);
        $this->setCodigoCookie($codigoCookie);
        $this->setContrasenna($contrasenna);
    }

    /* GETTERS Y SETTERS */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     *
     * @return mixed
     */
    public function getApellido1()
    {
        return $this->apellido1;
    }

    /**
     *
     * @return mixed
     */
    public function getApellido2()
    {
        return $this->apellido2;
    }

    /**
     *
     * @return mixed
     */
    public function getTelefono1()
    {
        return $this->telefono1;
    }

    /**
     *
     * @return mixed
     */
    public function getTelefono2()
    {
        return $this->telefono2;
    }

    /**
     *
     * @return mixed
     */
    public function getCodigoCookie()
    {
        return $this->codigoCookie;
    }

    /**
     *
     * @return mixed
     */
    public function getContrasenna()
    {
        return $this->contrasenna;
    }

    /**
     *
     * @param mixed $apellido1
     */
    public function setApellido1($apellido1)
    {
        $this->apellido1 = $apellido1;
    }

    /**
     *
     * @param mixed $apellido2
     */
    public function setApellido2($apellido2)
    {
        $this->apellido2 = $apellido2;
    }

    /**
     *
     * @param mixed $telefono1
     */
    public function setTelefono1($telefono1)
    {
        $this->telefono1 = $telefono1;
    }

    /**
     *
     * @param mixed $telefono2
     */
    public function setTelefono2($telefono2)
    {
        $this->telefono2 = $telefono2;
    }

    /**
     *
     * @param mixed $codigoCookie
     */
    public function setCodigoCookie($codigoCookie)
    {
        $this->codigoCookie = $codigoCookie;
    }

    /**
     *
     * @param mixed $contrasenna
     */
    public function setContrasenna($contrasenna)
    {
        $this->contrasenna = $contrasenna;
    }
}
?>