<?php

class ServicioValueObject {

    private $_servicio_id;
    private $_servicio_especialidad;
    private $_servicio_encargado;
    private $_organismo_id;
    private $_pers_id_usu;
    private $_servicio_fecha_mod;

    public function getServicio_id() {
        return $this->_servicio_id;
    }

    public function getServicio_especialidad() {
        return $this->_servicio_especialidad;
    }

    public function getServicio_encargado() {
        return $this->_servicio_encargado;
    }

    public function getOrganismo_id() {
        return $this->_organismo_id;
    }

    public function getPers_id_usu() {
        return $this->_pers_id_usu;
    }

    public function getServicio_fecha_mod() {
        return $this->_servicio_fecha_mod;
    }

    public function setServicio_id($servicio_id) {
        $this->_servicio_id = $servicio_id;
    }

    public function setServicio_especialidad($servicio_especialidad) {
        $this->_servicio_especialidad = $servicio_especialidad;
    }

    public function setServicio_encargado($servicio_encargado) {
        $this->_servicio_encargado = $servicio_encargado;
    }

    public function setOrganismo_id($organismo_id) {
        $this->_organismo_id = $organismo_id;
    }

    public function setPers_id_usu($pers_id_usu) {
        $this->_pers_id_usu = $pers_id_usu;
    }

    public function setServicio_fecha_mod($servicio_fecha_mod) {
        $this->_servicio_fecha_mod = $servicio_fecha_mod;
    }

}

?>