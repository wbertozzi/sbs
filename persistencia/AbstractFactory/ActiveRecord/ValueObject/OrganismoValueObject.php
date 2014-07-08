<?php

class OrganismoValueObject {

    private $_organismo_id;
    private $_organismo_nombre;
    private $_organismo_domicilio;
    private $_organismo_telefono;
    private $_organismo_email;
    private $_organismo_complejidad;
    private $_organismo_observacion;
    private $_organismo_director;
    private $_ciudad_id;

    public function getOrganismo_id() {
        return $this->_organismo_id;
    }

    public function getOrganismo_nombre() {
        return $this->_organismo_nombre;
    }

    public function getOrganismo_domicilio() {
        return $this->_organismo_domicilio;
    }

    public function getOrganismo_telefono() {
        return $this->_organismo_telefono;
    }

    public function getOrganismo_email() {
        return $this->_organismo_email;
    }

    public function getOrganismo_complejidad() {
        return $this->_organismo_complejidad;
    }

    public function getOrganismo_observacion() {
        return $this->_organismo_observacion;
    }

    public function getOrganismo_director() {
        return $this->_organismo_director;
    }

    public function getCiudad_id() {
        return $this->_ciudad_id;
    }

    public function setOrganismo_id($organismo_id) {
        $this->_organismo_id = $organismo_id;
    }

    public function setOrganismo_nombre($organismo_nombre) {
        $this->_organismo_nombre = $organismo_nombre;
    }

    public function setOrganismo_domicilio($organismo_domicilio) {
        $this->_organismo_domicilio = $organismo_domicilio;
    }

    public function setOrganismo_telefono($organismo_telefono) {
        $this->_organismo_telefono = $organismo_telefono;
    }

    public function setOrganismo_email($organismo_email) {
        $this->_organismo_email = $organismo_email;
    }

    public function setOrganismo_complejidad($organismo_complejidad) {
        $this->_organismo_complejidad = $organismo_complejidad;
    }

    public function setOrganismo_observacion($organismo_observacion) {
        $this->_organismo_observacion = $organismo_observacion;
    }

    public function setOrganismo_director($organismo_director) {
        $this->_organismo_director = $organismo_director;
    }

    public function setCiudad_id($ciudad_id) {
        $this->_ciudad_id = $ciudad_id;
    }

}

?>