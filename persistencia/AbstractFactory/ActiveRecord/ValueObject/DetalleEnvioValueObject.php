<?php

class DetalleEnvioValueObject {

    private $_detalle_envio_id;
    private $_entidad_id;
    private $_bolsa_id;
    private $_envio_id;
    private $_detalle_envio_descripcion;
    private $_pers_id_usu;
    private $_detalle_envio_fecha_mod;

    public function getDetalle_envio_id() {
        return $this->_detalle_envio_id;
    }

    public function getEntidad_id() {
        return $this->_entidad_id;
    }

    public function getBolsa_id() {
        return $this->_bolsa_id;
    }

    public function getEnvio_id() {
        return $this->_envio_id;
    }

    public function getDetalle_envio_descripcion() {
        return $this->_detalle_envio_descripcion;
    }

    public function getPers_id_usu() {
        return $this->_pers_id_usu;
    }

    public function getDetalle_envio_fecha_mod() {
        return $this->_detalle_envio_fecha_mod;
    }

    public function setDetalle_envio_id($detalle_envio_id) {
        $this->_detalle_envio_id = $detalle_envio_id;
    }

    public function setEntidad_id($entidad_id) {
        $this->_entidad_id = $entidad_id;
    }

    public function setBolsa_id($bolsa_id) {
        $this->_bolsa_id = $bolsa_id;
    }

    public function setEnvio_id($envio_id) {
        $this->_envio_id = $envio_id;
    }

    public function setDetalle_envio_descripcion($detalle_envio_descripcion) {
        $this->_detalle_envio_descripcion = $detalle_envio_descripcion;
    }

    public function setPers_id_usu($pers_id_usu) {
        $this->_pers_id_usu = $pers_id_usu;
    }

    public function setDetalle_envio_fecha_mod($detalle_envio_fecha_mod) {
        $this->_detalle_envio_fecha_mod = $detalle_envio_fecha_mod;
    }

}

?>