<?php

class EnvioValueObject {

    private $_envio_id;
    private $_envio_fecha;
    private $_envio_estado;
    private $_envio_tipo;
    private $_entidad_id_origen;
    private $_entidad_id_destino;
    private $_transp_id;
    private $_pers_id_usu;
    private $_envio_fecha_mod;

    public function getEnvio_id() {
        return $this->_envio_id;
    }

    public function getEnvio_fecha() {
        return $this->_envio_fecha;
    }

    public function getEnvio_estado() {
        return $this->_envio_estado;
    }

    public function getEnvio_tipo() {
        return $this->_envio_tipo;
    }

    public function getEntidad_id_origen() {
        return $this->_entidad_id_origen;
    }

    public function getEntidad_id_destino() {
        return $this->_entidad_id_destino;
    }

    public function getTransp_id() {
        return $this->_transp_id;
    }

    public function getPers_id_usu() {
        return $this->_pers_id_usu;
    }

    public function getEnvio_fecha_mod() {
        return $this->_envio_fecha_mod;
    }

    public function setEnvio_id($envio_id) {
        $this->_envio_id = $envio_id;
    }

    public function setEnvio_fecha($envio_fecha) {
        $this->_envio_fecha = $envio_fecha;
    }

    public function setEnvio_estado($envio_estado) {
        $this->_envio_estado = $envio_estado;
    }

    public function setEnvio_tipo($envio_tipo) {
        $this->_envio_tipo = $envio_tipo;
    }

    public function setEntidad_id_origen($entidad_id_origen) {
        $this->_entidad_id_origen = $entidad_id_origen;
    }

    public function setEntidad_id_destino($entidad_id_destino) {
        $this->_entidad_id_destino = $entidad_id_destino;
    }

    public function setTransp_id($transp_id) {
        $this->_transp_id = $transp_id;
    }

    public function setPers_id_usu($pers_id_usu) {
        $this->_pers_id_usu = $pers_id_usu;
    }

    public function setEnvio_fecha_mod($envio_fecha_mod) {
        $this->_envio_fecha_mod = $envio_fecha_mod;
    }

}

?>