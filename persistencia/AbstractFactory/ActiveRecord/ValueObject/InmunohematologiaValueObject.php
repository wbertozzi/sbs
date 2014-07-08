<?php

class InmunohematologiaValueObject {

    private $_inmuno_id;
    private $_inmuno_grupo;
    private $_inmuno_factor;
    private $_inmuno_coms_dir;
    private $_inmuno_coms_ind;
    private $_inmuno_anticuerpo;
    private $_inmuno_nom_anticuerpo;
    private $_inmuno_hemolicina;
    private $_inmuno_estado;
    private $_inmuno_observacion;
    private $_inmuno_fenotipo_prob;

    public function getInmuno_id() {
        return $this->_inmuno_id;
    }

    public function getInmuno_grupo() {
        return $this->_inmuno_grupo;
    }

    public function getInmuno_factor() {
        return $this->_inmuno_factor;
    }

    public function getInmuno_coms_dir() {
        return $this->_inmuno_coms_dir;
    }

    public function getInmuno_coms_ind() {
        return $this->_inmuno_coms_ind;
    }

    public function getInmuno_anticuerpo() {
        return $this->_inmuno_anticuerpo;
    }

    public function getInmuno_nom_anticuerpo() {
        return $this->_inmuno_nom_anticuerpo;
    }

    public function getInmuno_hemolicina() {
        return $this->_inmuno_hemolicina;
    }

    public function getInmuno_estado() {
        return $this->_inmuno_estado;
    }

    public function getInmuno_observacion() {
        return $this->_inmuno_observacion;
    }

    public function getInmuno_fenotipo_prob() {
        return $this->_inmuno_fenotipo_prob;
    }

    public function setInmuno_id($inmuno_id) {
        $this->_inmuno_id = $inmuno_id;
    }

    public function setInmuno_grupo($inmuno_grupo) {
        $this->_inmuno_grupo = $inmuno_grupo;
    }

    public function setInmuno_factor($inmuno_factor) {
        $this->_inmuno_factor = $inmuno_factor;
    }

    public function setInmuno_coms_dir($inmuno_coms_dir) {
        $this->_inmuno_coms_dir = $inmuno_coms_dir;
    }

    public function setInmuno_coms_ind($inmuno_coms_ind) {
        $this->_inmuno_coms_ind = $inmuno_coms_ind;
    }

    public function setInmuno_anticuerpo($inmuno_anticuerpo) {
        $this->_inmuno_anticuerpo = $inmuno_anticuerpo;
    }

    public function setInmuno_nom_anticuerpo($inmuno_nom_anticuerpo) {
        $this->_inmuno_nom_anticuerpo = $inmuno_nom_anticuerpo;
    }

    public function setInmuno_hemolicina($inmuno_hemolicina) {
        $this->_inmuno_hemolicina = $inmuno_hemolicina;
    }

    public function setInmuno_estado($inmuno_estado) {
        $this->_inmuno_estado = $inmuno_estado;
    }

    public function setInmuno_observacion($inmuno_observacion) {
        $this->_inmuno_observacion = $inmuno_observacion;
    }

    public function setInmuno_fenotipo_prob($inmuno_fenotipo_prob) {
        $this->_inmuno_fenotipo_prob = $inmuno_fenotipo_prob;
    }

}

?>