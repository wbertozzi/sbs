<?php

class PruebaSerologiaValueObject {

    private $_prueba_serol_id;
    private $_prueba_serol_estado;
    private $_prueba_serol_resultado;
    private $_serol_id;
    private $_prueba_id;
    private $_marca_react_id;
    private $_pers_id_usu;
    private $_prueba_serol_fecha_mod;

    public function getPrueba_serol_id() {
        return $this->_prueba_serol_id;
    }

    public function getPrueba_serol_estado() {
        return $this->_prueba_serol_estado;
    }

    public function getPrueba_serol_resultado() {
        return $this->_prueba_serol_resultado;
    }

    public function getSerol_id() {
        return $this->_serol_id;
    }

    public function getPrueba_id() {
        return $this->_prueba_id;
    }

    public function getMarca_react_id() {
        return $this->_marca_react_id;
    }

    public function getPers_id_usu() {
        return $this->_pers_id_usu;
    }

    public function getPrueba_serol_fecha_mod() {
        return $this->_prueba_serol_fecha_mod;
    }

    public function setPrueba_serol_id($prueba_serol_id) {
        $this->_prueba_serol_id = $prueba_serol_id;
    }

    public function setPrueba_serol_estado($prueba_serol_estado) {
        $this->_prueba_serol_estado = $prueba_serol_estado;
    }

    public function setPrueba_serol_resultado($prueba_serol_resultado) {
        $this->_prueba_serol_resultado = $prueba_serol_resultado;
    }

    public function setSerol_id($serol_id) {
        $this->_serol_id = $serol_id;
    }

    public function setPrueba_id($prueba_id) {
        $this->_prueba_id = $prueba_id;
    }

    public function setMarca_react_id($marca_react_id) {
        $this->_marca_react_id = $marca_react_id;
    }

    public function setPers_id_usu($pers_id_usu) {
        $this->_pers_id_usu = $pers_id_usu;
    }

    public function setPrueba_serol_fecha_mod($prueba_serol_fecha_mod) {
        $this->_prueba_serol_fecha_mod = $prueba_serol_fecha_mod;
    }

}

?>