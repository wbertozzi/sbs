<?php

class PruebaValueObject {

    private $_prueba_id;
    private $_prueba_nombre;
    private $_prueba_diferido;
    private $_pers_id_usu;
    private $_prueba_fecha_mod;

    public function getPrueba_id() {
        return $this->_prueba_id;
    }

    public function getPrueba_nombre() {
        return $this->_prueba_nombre;
    }

    public function getPrueba_diferido() {
        return $this->_prueba_diferido;
    }

    public function getPers_id_usu() {
        return $this->_pers_id_usu;
    }

    public function getPrueba_fecha_mod() {
        return $this->_prueba_fecha_mod;
    }

    public function setPrueba_id($prueba_id) {
        $this->_prueba_id = $prueba_id;
    }

    public function setPrueba_nombre($prueba_nombre) {
        $this->_prueba_nombre = $prueba_nombre;
    }

    public function setPrueba_diferido($prueba_diferido) {
        $this->_prueba_diferido = $prueba_diferido;
    }

    public function setPers_id_usu($pers_id_usu) {
        $this->_pers_id_usu = $pers_id_usu;
    }

    public function setPrueba_fecha_mod($prueba_fecha_mod) {
        $this->_prueba_fecha_mod = $prueba_fecha_mod;
    }

}

?>