<?php

class CompatibilidadValueObject {

    private $_comp_id;
    private $_comp_mayor;
    private $_comp_mayor_obs;
    private $_comp_menor;
    private $_comp_menor_obs;
    private $_inmuno_pac_id;
    private $_inmuno_bolsa_id;
    private $_comp_observacion;
    private $_pers_id_usu;
    private $_comp_fecha_mod;

    public function getComp_id() {
        return $this->_comp_id;
    }

    public function getComp_mayor() {
        return $this->_comp_mayor;
    }

    public function getComp_mayor_obs() {
        return $this->_comp_mayor_obs;
    }

    public function getComp_menor() {
        return $this->_comp_menor;
    }

    public function getComp_menor_obs() {
        return $this->_comp_menor_obs;
    }

    public function getInmuno_pac_id() {
        return $this->_inmuno_pac_id;
    }

    public function getInmuno_bolsa_id() {
        return $this->_inmuno_bolsa_id;
    }

    public function getComp_observacion() {
        return $this->_comp_observacion;
    }

    public function getPers_id_usu() {
        return $this->_pers_id_usu;
    }

    public function getComp_fecha_mod() {
        return $this->_comp_fecha_mod;
    }

    public function setComp_id($comp_id) {
        $this->_comp_id = $comp_id;
    }

    public function setComp_mayor($comp_mayor) {
        $this->_comp_mayor = $comp_mayor;
    }

    public function setComp_mayor_obs($comp_mayor_obs) {
        $this->_comp_mayor_obs = $comp_mayor_obs;
    }

    public function setComp_menor($comp_menor) {
        $this->_comp_menor = $comp_menor;
    }

    public function setComp_menor_obs($comp_menor_obs) {
        $this->_comp_menor_obs = $comp_menor_obs;
    }

    public function setInmuno_pac_id($inmuno_pac_id) {
        $this->_inmuno_pac_id = $inmuno_pac_id;
    }

    public function setInmuno_bolsa_id($inmuno_bolsa_id) {
        $this->_inmuno_bolsa_id = $inmuno_bolsa_id;
    }

    public function setComp_observacion($comp_observacion) {
        $this->_comp_observacion = $comp_observacion;
    }

    public function setPers_id_usu($pers_id_usu) {
        $this->_pers_id_usu = $pers_id_usu;
    }

    public function setComp_fecha_mod($comp_fecha_mod) {
        $this->_comp_fecha_mod = $comp_fecha_mod;
    }

}

?>