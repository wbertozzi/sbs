<?php

class TrazabilidadGlobuloValueObject {

    private $_trasab_globulo_id;
    private $_trasab_globulo_estado;
    private $_bolsa_id;
    private $_globulo_id;
    private $_entidad_id;

    public function getTrasab_globulo_id() {
        return $this->_trasab_globulo_id;
    }

    public function getTrasab_globulo_estado() {
        return $this->_trasab_globulo_estado;
    }

    public function getBolsa_id() {
        return $this->_bolsa_id;
    }

    public function getGlobulo_id() {
        return $this->_globulo_id;
    }

    public function getEntidad_id() {
        return $this->_entidad_id;
    }

    public function setTrasab_globulo_id($trasab_globulo_id) {
        $this->_trasab_globulo_id = $trasab_globulo_id;
    }

    public function setTrasab_globulo_estado($trasab_globulo_estado) {
        $this->_trasab_globulo_estado = $trasab_globulo_estado;
    }

    public function setBolsa_id($bolsa_id) {
        $this->_bolsa_id = $bolsa_id;
    }

    public function setGlobulo_id($globulo_id) {
        $this->_globulo_id = $globulo_id;
    }

    public function setEntidad_id($entidad_id) {
        $this->_entidad_id = $entidad_id;
    }

}

?>