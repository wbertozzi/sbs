<?php

class PersonaValueObject {

    private $_pers_id;
    private $_pers_nombre;
    private $_pers_dni;
    private $_pers_apellido;
    private $_pers_fec_nac;
    private $_pers_sexo;
    private $_pers_domicilio;
    private $_pers_codigo_postal;
    private $_ciudad_id;
    private $_pers_id_usu;
    private $_pers_fecha_mod;

    public function getPers_id() {
        return $this->_pers_id;
    }

    public function getPers_nombre() {
        return $this->_pers_nombre;
    }

    public function getPers_dni() {
        return $this->_pers_dni;
    }

    public function getPers_apellido() {
        return $this->_pers_apellido;
    }

    public function getPers_fec_nac() {
        return $this->_pers_fec_nac;
    }

    public function getPers_sexo() {
        return $this->_pers_sexo;
    }

    public function getPers_domicilio() {
        return $this->_pers_domicilio;
    }

    public function getPers_codigo_postal() {
        return $this->_pers_codigo_postal;
    }

    public function getCiudad_id() {
        return $this->_ciudad_id;
    }

    public function getPers_id_usu() {
        return $this->_pers_id_usu;
    }

    public function getPers_fecha_mod() {
        return $this->_pers_fecha_mod;
    }

    public function setPers_id($pers_id) {
        $this->_pers_id = $pers_id;
    }

    public function setPers_nombre($pers_nombre) {
        $this->_pers_nombre = $pers_nombre;
    }

    public function setPers_dni($pers_dni) {
        $this->_pers_dni = $pers_dni;
    }

    public function setPers_apellido($pers_apellido) {
        $this->_pers_apellido = $pers_apellido;
    }

    public function setPers_fec_nac($pers_fec_nac) {
        $this->_pers_fec_nac = $pers_fec_nac;
    }

    public function setPers_sexo($pers_sexo) {
        $this->_pers_sexo = $pers_sexo;
    }

    public function setPers_domicilio($pers_domicilio) {
        $this->_pers_domicilio = $pers_domicilio;
    }

    public function setPers_codigo_postal($pers_codigo_postal) {
        $this->_pers_codigo_postal = $pers_codigo_postal;
    }

    public function setCiudad_id($ciudad_id) {
        $this->_ciudad_id = $ciudad_id;
    }

    public function setPers_id_usu($pers_id_usu) {
        $this->_pers_id_usu = $pers_id_usu;
    }

    public function setPers_fecha_mod($pers_fecha_mod) {
        $this->_pers_fecha_mod = $pers_fecha_mod;
    }

}

?>