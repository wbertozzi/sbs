<?php

class TipoBolsaValueObject {

    private $_tipo_bolsa_id;
    private $_tipo_bolsa_nombre;
    private $_tipo_bolsa_caracteristica;

    public function getTipo_bolsa_id() {
        return $this->_tipo_bolsa_id;
    }

    public function getTipo_bolsa_nombre() {
        return $this->_tipo_bolsa_nombre;
    }

    public function getTipo_bolsa_caracteristica() {
        return $this->_tipo_bolsa_caracteristica;
    }

    public function setTipo_bolsa_id($tipo_bolsa_id) {
        $this->_tipo_bolsa_id = $tipo_bolsa_id;
    }

    public function setTipo_bolsa_nombre($tipo_bolsa_nombre) {
        $this->_tipo_bolsa_nombre = $tipo_bolsa_nombre;
    }

    public function setTipo_bolsa_caracteristica($tipo_bolsa_caracteristica) {
        $this->_tipo_bolsa_caracteristica = $tipo_bolsa_caracteristica;
    }

}

?>