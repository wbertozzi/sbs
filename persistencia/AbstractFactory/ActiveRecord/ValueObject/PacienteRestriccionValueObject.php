<?php

class PacienteRestriccionValueObject {

    private $_pac_rest_id;
    private $_pac_rest_fec_desde;
    private $_pac_rest_fec_hasta;
    private $_pac_rest_observacion;
    private $_pers_id_pac;
    private $_rest_id;

    public function getPac_rest_id() {
        return $this->_pac_rest_id;
    }

    public function getPac_rest_fec_desde() {
        return $this->_pac_rest_fec_desde;
    }

    public function getPac_rest_fec_hasta() {
        return $this->_pac_rest_fec_hasta;
    }

    public function getPac_rest_observacion() {
        return $this->_pac_rest_observacion;
    }

    public function getPers_id_pac() {
        return $this->_pers_id_pac;
    }

    public function getRest_id() {
        return $this->_rest_id;
    }

    public function setPac_rest_id($pac_rest_id) {
        $this->_pac_rest_id = $pac_rest_id;
    }

    public function setPac_rest_fec_desde($pac_rest_fec_desde) {
        $this->_pac_rest_fec_desde = $pac_rest_fec_desde;
    }

    public function setPac_rest_fec_hasta($pac_rest_fec_hasta) {
        $this->_pac_rest_fec_hasta = $pac_rest_fec_hasta;
    }

    public function setPac_rest_observacion($pac_rest_observacion) {
        $this->_pac_rest_observacion = $pac_rest_observacion;
    }

    public function setPers_id_pac($pers_id_pac) {
        $this->_pers_id_pac = $pers_id_pac;
    }

    public function setRest_id($rest_id) {
        $this->_rest_id = $rest_id;
    }

}

?>