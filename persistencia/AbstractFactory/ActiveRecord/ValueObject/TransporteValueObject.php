<?php

class TransporteValueObject {

    private $_transp_id;
    private $_transp_nombre;
    private $_transp_domicilio;
    private $_transp_telefono;
    private $_transp_email;

    public function getTransp_id() {
        return $this->_transp_id;
    }

    public function getTransp_nombre() {
        return $this->_transp_nombre;
    }

    public function getTransp_domicilio() {
        return $this->_transp_domicilio;
    }

    public function getTransp_telefono() {
        return $this->_transp_telefono;
    }

    public function getTransp_email() {
        return $this->_transp_email;
    }

    public function setTransp_id($transp_id) {
        $this->_transp_id = $transp_id;
    }

    public function setTransp_nombre($transp_nombre) {
        $this->_transp_nombre = $transp_nombre;
    }

    public function setTransp_domicilio($transp_domicilio) {
        $this->_transp_domicilio = $transp_domicilio;
    }

    public function setTransp_telefono($transp_telefono) {
        $this->_transp_telefono = $transp_telefono;
    }

    public function setTransp_email($transp_email) {
        $this->_transp_email = $transp_email;
    }

}

?>