<?php

class Direccion
{

    private $idDireccion;

    private $provincia;

    private $municipio;

    private $nombreVia;

    private $tipoVia;

    private $numero;

    private $letra;

    private $cp;

    private $piso;

    public function __construct($idDireccion, $provincia, $municipio, $nombreVia, $tipoVia, $numero, $letra, $cp, $piso)
    {
        $this->setIdDireccion($idDireccion);
        $this->setProvincia($provincia);
        $this->setMunicipio($municipio);
        $this->setNombreVia($nombreVia);
        $this->setTipoVia($tipoVia);
        $this->setNumero($numero);
        $this->setLetra($letra);
        $this->setCp($cp);
        $this->setPiso($piso);
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
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     *
     * @return mixed
     */
    public function getMunicipio()
    {
        return $this->municipio;
    }

    /**
     *
     * @return mixed
     */
    public function getNombreVia()
    {
        return $this->nombreVia;
    }

    /**
     *
     * @return mixed
     */
    public function getTipoVia()
    {
        return $this->tipoVia;
    }

    /**
     *
     * @return mixed
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     *
     * @return mixed
     */
    public function getLetra()
    {
        return $this->letra;
    }

    /**
     *
     * @return mixed
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     *
     * @return mixed
     */
    public function getPiso()
    {
        return $this->piso;
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
     * @param mixed $provincia
     */
    public function setProvincia($provincia)
    {
        $this->provincia = $provincia;
    }

    /**
     *
     * @param mixed $municipio
     */
    public function setMunicipio($municipio)
    {
        $this->municipio = $municipio;
    }

    /**
     *
     * @param mixed $nombreVia
     */
    public function setNombreVia($nombreVia)
    {
        $this->nombreVia = $nombreVia;
    }

    /**
     *
     * @param mixed $tipoVia
     */
    public function setTipoVia($tipoVia)
    {
        $this->tipoVia = $tipoVia;
    }

    /**
     *
     * @param mixed $numero
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    /**
     *
     * @param mixed $letra
     */
    public function setLetra($letra)
    {
        $this->letra = $letra;
    }

    /**
     *
     * @param mixed $cp
     */
    public function setCp($cp)
    {
        $this->cp = $cp;
    }

    /**
     *
     * @param mixed $piso
     */
    public function setPiso($piso)
    {
        $this->piso = $piso;
    }
}
?>