<?php

class EntidadValueObject {

    private $_entidad_id;
    private $_entidad_nombre;
    private $_entidad_domicilio;
    private $_entidad_telefono;
    private $_entidad_email;
    private $_entidad_encargado;
    private $_ciudad_id;
    private $_organismo_id;
    private $_pers_id_usu;
    private $_entidad_fecha_mod;

    public function getEntidad_id() {
        return $this->_entidad_id;
    }

    public function getEntidad_nombre() {
        return $this->_entidad_nombre;
    }

    public function getEntidad_domicilio() {
        return $this->_entidad_domicilio;
    }

    public function getEntidad_telefono() {
        return $this->_entidad_telefono;
    }

    public function getEntidad_email() {
        return $this->_entidad_email;
    }

    public function getEntidad_encargado() {
        return $this->_entidad_encargado;
    }

    public function getCiudad_id() {
        return $this->_ciudad_id;
    }

    public function getOrganismo_id() {
        return $this->_organismo_id;
    }

    public function getPers_id_usu() {
        return $this->_pers_id_usu;
    }

    public function getEntidad_fecha_mod() {
        return $this->_entidad_fecha_mod;
    }

    public function setEntidad_id($entidad_id) {
        $this->_entidad_id = $entidad_id;
    }

    public function setEntidad_nombre($entidad_nombre) {
        $this->_entidad_nombre = $entidad_nombre;
    }

    public function setEntidad_domicilio($entidad_domicilio) {
        $this->_entidad_domicilio = $entidad_domicilio;
    }

    public function setEntidad_telefono($entidad_telefono) {
        $this->_entidad_telefono = $entidad_telefono;
    }

    public function setEntidad_email($entidad_email) {
        $this->_entidad_email = $entidad_email;
    }

    public function setEntidad_encargado($entidad_encargado) {
        $this->_entidad_encargado = $entidad_encargado;
    }

    public function setCiudad_id($ciudad_id) {
        $this->_ciudad_id = $ciudad_id;
    }

    public function setOrganismo_id($organismo_id) {
        $this->_organismo_id = $organismo_id;
    }

    public function setPers_id_usu($pers_id_usu) {
        $this->_pers_id_usu = $pers_id_usu;
    }

    public function setEntidad_fecha_mod($entidad_fecha_mod) {
        $this->_entidad_fecha_mod = $entidad_fecha_mod;
    }

}

?>