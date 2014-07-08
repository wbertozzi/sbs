<?php

class PreguntaValueObject {

    private $_preg_id;
    private $_preg_texto;
    private $_preg_prioridad;

    public function getPreg_id() {
        return $this->_preg_id;
    }

    public function getPreg_texto() {
        return $this->_preg_texto;
    }

    public function getPreg_prioridad() {
        return $this->_preg_prioridad;
    }

    public function setPreg_id($preg_id) {
        $this->_preg_id = $preg_id;
    }

    public function setPreg_texto($preg_texto) {
        $this->_preg_texto = $preg_texto;
    }

    public function setPreg_prioridad($preg_prioridad) {
        $this->_preg_prioridad = $preg_prioridad;
    }

}

?>