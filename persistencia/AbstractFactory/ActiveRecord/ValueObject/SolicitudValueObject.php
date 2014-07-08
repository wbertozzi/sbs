<?php

class SolicitudValueObject {

    private $_solic_id;
    private $_solic_fecha;
    private $_solic_diagnostico;
    private $_solic_hematocrito;
    private $_solic_hemoglubina;
    private $_solic_medico;
    private $_solic_caracter;
    private $_solic_estado;
    private $_solic_tipo;
    private $_servicio_id;
    private $_cent_transf_id;
    private $_pers_id_pac;
    private $_pers_id_usu;
    private $_solic_fecha_mod;

    public function getSolic_id() {
        return $this->_solic_id;
    }

    public function getSolic_fecha() {
        return $this->_solic_fecha;
    }

    public function getSolic_diagnostico() {
        return $this->_solic_diagnostico;
    }

    public function getSolic_hematocrito() {
        return $this->_solic_hematocrito;
    }

    public function getSolic_hemoglubina() {
        return $this->_solic_hemoglubina;
    }

    public function getSolic_medico() {
        return $this->_solic_medico;
    }

    public function getSolic_caracter() {
        return $this->_solic_caracter;
    }

    public function getSolic_estado() {
        return $this->_solic_estado;
    }

    public function getSolic_tipo() {
        return $this->_solic_tipo;
    }

    public function getServicio_id() {
        return $this->_servicio_id;
    }

    public function getCent_transf_id() {
        return $this->_cent_transf_id;
    }

    public function getPers_id_pac() {
        return $this->_pers_id_pac;
    }

    public function getPers_id_usu() {
        return $this->_pers_id_usu;
    }

    public function getSolic_fecha_mod() {
        return $this->_solic_fecha_mod;
    }

    public function setSolic_id($solic_id) {
        $this->_solic_id = $solic_id;
    }

    public function setSolic_fecha($solic_fecha) {
        $this->_solic_fecha = $solic_fecha;
    }

    public function setSolic_diagnostico($solic_diagnostico) {
        $this->_solic_diagnostico = $solic_diagnostico;
    }

    public function setSolic_hematocrito($solic_hematocrito) {
        $this->_solic_hematocrito = $solic_hematocrito;
    }

    public function setSolic_hemoglubina($solic_hemoglubina) {
        $this->_solic_hemoglubina = $solic_hemoglubina;
    }

    public function setSolic_medico($solic_medico) {
        $this->_solic_medico = $solic_medico;
    }

    public function setSolic_caracter($solic_caracter) {
        $this->_solic_caracter = $solic_caracter;
    }

    public function setSolic_estado($solic_estado) {
        $this->_solic_estado = $solic_estado;
    }

    public function setSolic_tipo($solic_tipo) {
        $this->_solic_tipo = $solic_tipo;
    }

    public function setServicio_id($servicio_id) {
        $this->_servicio_id = $servicio_id;
    }

    public function setCent_transf_id($cent_transf_id) {
        $this->_cent_transf_id = $cent_transf_id;
    }

    public function setPers_id_pac($pers_id_pac) {
        $this->_pers_id_pac = $pers_id_pac;
    }

    public function setPers_id_usu($pers_id_usu) {
        $this->_pers_id_usu = $pers_id_usu;
    }

    public function setSolic_fecha_mod($solic_fecha_mod) {
        $this->_solic_fecha_mod = $solic_fecha_mod;
    }

}

?>