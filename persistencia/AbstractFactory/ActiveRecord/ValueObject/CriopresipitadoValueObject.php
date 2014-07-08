<?php

class CriopresipitadoValueObject {

    private $_criop_id;
    private $_criop_fecha_fraccion;
    private $_criop_estado;
    private $_criop_descripcion;
    private $_criop_fecha_validez;
    private $_criop_peso_vacia;
    private $_criop_peso_neto;
    private $_bolsa_id;
    private $_pers_id_usu;
    private $_criop_fecha_mod;

    public function getCriop_id() {
        return $this->_criop_id;
    }

    public function getCriop_fecha_fraccion() {
        return $this->_criop_fecha_fraccion;
    }

    public function getCriop_estado() {
        return $this->_criop_estado;
    }

    public function getCriop_descripcion() {
        return $this->_criop_descripcion;
    }

    public function getCriop_fecha_validez() {
        return $this->_criop_fecha_validez;
    }

    public function getCriop_peso_vacia() {
        return $this->_criop_peso_vacia;
    }

    public function getCriop_peso_neto() {
        return $this->_criop_peso_neto;
    }

    public function getBolsa_id() {
        return $this->_bolsa_id;
    }

    public function getPers_id_usu() {
        return $this->_pers_id_usu;
    }

    public function getCriop_fecha_mod() {
        return $this->_criop_fecha_mod;
    }

    public function setCriop_id($criop_id) {
        $this->_criop_id = $criop_id;
    }

    public function setCriop_fecha_fraccion($criop_fecha_fraccion) {
        $this->_criop_fecha_fraccion = $criop_fecha_fraccion;
    }

    public function setCriop_estado($criop_estado) {
        $this->_criop_estado = $criop_estado;
    }

    public function setCriop_descripcion($criop_descripcion) {
        $this->_criop_descripcion = $criop_descripcion;
    }

    public function setCriop_fecha_validez($criop_fecha_validez) {
        $this->_criop_fecha_validez = $criop_fecha_validez;
    }

    public function setCriop_peso_vacia($criop_peso_vacia) {
        $this->_criop_peso_vacia = $criop_peso_vacia;
    }

    public function setCriop_peso_neto($criop_peso_neto) {
        $this->_criop_peso_neto = $criop_peso_neto;
    }

    public function setBolsa_id($bolsa_id) {
        $this->_bolsa_id = $bolsa_id;
    }

    public function setPers_id_usu($pers_id_usu) {
        $this->_pers_id_usu = $pers_id_usu;
    }

    public function setCriop_fecha_mod($criop_fecha_mod) {
        $this->_criop_fecha_mod = $criop_fecha_mod;
    }

}

?>