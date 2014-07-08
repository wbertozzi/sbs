<?php

class GlobuloValueObject {

    private $_globulo_id;
    private $_globulo_fecha_fraccion;
    private $_globulo_estado;
    private $_globulo_descripcion;
    private $_globulo_fecha_validez;
    private $_globulo_peso_vacia;
    private $_globulo_peso_neto;
    private $_bolsa_id;
    private $_pers_id_usu;
    private $_globulo_fecha_mod;

    public function getGlobulo_id() {
        return $this->_globulo_id;
    }

    public function getGlobulo_fecha_fraccion() {
        return $this->_globulo_fecha_fraccion;
    }

    public function getGlobulo_estado() {
        return $this->_globulo_estado;
    }

    public function getGlobulo_descripcion() {
        return $this->_globulo_descripcion;
    }

    public function getGlobulo_fecha_validez() {
        return $this->_globulo_fecha_validez;
    }

    public function getGlobulo_peso_vacia() {
        return $this->_globulo_peso_vacia;
    }

    public function getGlobulo_peso_neto() {
        return $this->_globulo_peso_neto;
    }

    public function getBolsa_id() {
        return $this->_bolsa_id;
    }

    public function getPers_id_usu() {
        return $this->_pers_id_usu;
    }

    public function getGlobulo_fecha_mod() {
        return $this->_globulo_fecha_mod;
    }

    public function setGlobulo_id($globulo_id) {
        $this->_globulo_id = $globulo_id;
    }

    public function setGlobulo_fecha_fraccion($globulo_fecha_fraccion) {
        $this->_globulo_fecha_fraccion = $globulo_fecha_fraccion;
    }

    public function setGlobulo_estado($globulo_estado) {
        $this->_globulo_estado = $globulo_estado;
    }

    public function setGlobulo_descripcion($globulo_descripcion) {
        $this->_globulo_descripcion = $globulo_descripcion;
    }

    public function setGlobulo_fecha_validez($globulo_fecha_validez) {
        $this->_globulo_fecha_validez = $globulo_fecha_validez;
    }

    public function setGlobulo_peso_vacia($globulo_peso_vacia) {
        $this->_globulo_peso_vacia = $globulo_peso_vacia;
    }

    public function setGlobulo_peso_neto($globulo_peso_neto) {
        $this->_globulo_peso_neto = $globulo_peso_neto;
    }

    public function setBolsa_id($bolsa_id) {
        $this->_bolsa_id = $bolsa_id;
    }

    public function setPers_id_usu($pers_id_usu) {
        $this->_pers_id_usu = $pers_id_usu;
    }

    public function setGlobulo_fecha_mod($globulo_fecha_mod) {
        $this->_globulo_fecha_mod = $globulo_fecha_mod;
    }

}

?>