<?php

class SolicitudComponenteValueObject {

    private $_sol_comp_id;
    private $_solic_id;
    private $_compon_id;
    private $_solic_comp_cantidad;

    public function getSol_comp_id() {
        return $this->_sol_comp_id;
    }

    public function getSolic_id() {
        return $this->_solic_id;
    }

    public function getCompon_id() {
        return $this->_compon_id;
    }

    public function getSolic_comp_cantidad() {
        return $this->_solic_comp_cantidad;
    }

    public function setSol_comp_id($sol_comp_id) {
        $this->_sol_comp_id = $sol_comp_id;
    }

    public function setSolic_id($solic_id) {
        $this->_solic_id = $solic_id;
    }

    public function setCompon_id($compon_id) {
        $this->_compon_id = $compon_id;
    }

    public function setSolic_comp_cantidad($solic_comp_cantidad) {
        $this->_solic_comp_cantidad = $solic_comp_cantidad;
    }

}

?>