<?php

class TrazabilidadPlaquetaValueObject {

    private $_trasab_plaq_id;
    private $_trasab_plaq_estado;
    private $_bolsa_id;
    private $_plaq_id;
    private $_entidad_id;

    public function getTrasab_plaq_id() {
        return $this->_trasab_plaq_id;
    }

    public function getTrasab_plaq_estado() {
        return $this->_trasab_plaq_estado;
    }

    public function getBolsa_id() {
        return $this->_bolsa_id;
    }

    public function getPlaq_id() {
        return $this->_plaq_id;
    }

    public function getEntidad_id() {
        return $this->_entidad_id;
    }

    public function setTrasab_plaq_id($trasab_plaq_id) {
        $this->_trasab_plaq_id = $trasab_plaq_id;
    }

    public function setTrasab_plaq_estado($trasab_plaq_estado) {
        $this->_trasab_plaq_estado = $trasab_plaq_estado;
    }

    public function setBolsa_id($bolsa_id) {
        $this->_bolsa_id = $bolsa_id;
    }

    public function setPlaq_id($plaq_id) {
        $this->_plaq_id = $plaq_id;
    }

    public function setEntidad_id($entidad_id) {
        $this->_entidad_id = $entidad_id;
    }

}

?>