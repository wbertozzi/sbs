<?php

class RespuestaValueObject {

    private $_resp_id;
    private $_resp_respuesta;
    private $_don_num_donacion;
    private $_preg_id;

    public function getResp_id() {
        return $this->_resp_id;
    }

    public function getResp_respuesta() {
        return $this->_resp_respuesta;
    }

    public function getDon_num_donacion() {
        return $this->_don_num_donacion;
    }

    public function getPreg_id() {
        return $this->_preg_id;
    }

    public function setResp_id($resp_id) {
        $this->_resp_id = $resp_id;
    }

    public function setResp_respuesta($resp_respuesta) {
        $this->_resp_respuesta = $resp_respuesta;
    }

    public function setDon_num_donacion($don_num_donacion) {
        $this->_don_num_donacion = $don_num_donacion;
    }

    public function setPreg_id($preg_id) {
        $this->_preg_id = $preg_id;
    }

}

?>