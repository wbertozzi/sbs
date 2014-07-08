<?php

class ProtocoloValueObject {

    private $_protocolo_id;
    private $_protocolo_observacion;
    private $_prueba_serol_id;
    private $_pers_id_usu;
    private $_prueba_serol_fecha_mod;

    public function getProtocolo_id() {
        return $this->_protocolo_id;
    }

    public function getProtocolo_observacion() {
        return $this->_protocolo_observacion;
    }

    public function getPrueba_serol_id() {
        return $this->_prueba_serol_id;
    }

    public function getPers_id_usu() {
        return $this->_pers_id_usu;
    }

    public function getPrueba_serol_fecha_mod() {
        return $this->_prueba_serol_fecha_mod;
    }

    public function setProtocolo_id($protocolo_id) {
        $this->_protocolo_id = $protocolo_id;
    }

    public function setProtocolo_observacion($protocolo_observacion) {
        $this->_protocolo_observacion = $protocolo_observacion;
    }

    public function setPrueba_serol_id($prueba_serol_id) {
        $this->_prueba_serol_id = $prueba_serol_id;
    }

    public function setPers_id_usu($pers_id_usu) {
        $this->_pers_id_usu = $pers_id_usu;
    }

    public function setPrueba_serol_fecha_mod($prueba_serol_fecha_mod) {
        $this->_prueba_serol_fecha_mod = $prueba_serol_fecha_mod;
    }

}

?>