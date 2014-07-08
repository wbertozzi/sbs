<?php
/**
* Archivo de la clase PgsqlActiveRecordAbstractFactory.
* Archivo de la clase PgsqlActiveRecordAbstractFactory que nos
* permite conectar al servidor Pgsql y tambin podremos crear
* objetos de las clases tipo Active Record para cada una de las
* tablas Pgsql.
*/
// Se requiere de la clase ActiveRecordAbstractFactory
require_once("ActiveRecordAbstractFactory.php");


require_once("ActiveRecord/PersonaActiveRecord.php");

require_once("ActiveRecord/UsuarioActiveRecord.php");

require_once("ActiveRecord/TipoUsuarioActiveRecord.php");

require_once("ActiveRecord/PacienteActiveRecord.php");

require_once("ActiveRecord/OcupacionActiveRecord.php");

require_once("ActiveRecord/PacienteRestriccionActiveRecord.php");

require_once("ActiveRecord/RestriccionActiveRecord.php");

require_once("ActiveRecord/DonacionActiveRecord.php");

require_once("ActiveRecord/DatoDonacionActiveRecord.php");

require_once("ActiveRecord/RespuestaActiveRecord.php");

require_once("ActiveRecord/PreguntaActiveRecord.php");

require_once("ActiveRecord/ExtraccionActiveRecord.php");

require_once("ActiveRecord/CiudadActiveRecord.php");

require_once("ActiveRecord/ProvinciaActiveRecord.php");

require_once("ActiveRecord/InmunohematologiaActiveRecord.php");

require_once("ActiveRecord/InmunoPacienteActiveRecord.php");

require_once("ActiveRecord/InmunoBolsaActiveRecord.php");

require_once("ActiveRecord/CompatibilidadActiveRecord.php");

require_once("ActiveRecord/SerologiaActiveRecord.php");

require_once("ActiveRecord/PruebaSerologiaActiveRecord.php");

require_once("ActiveRecord/ProtocoloActiveRecord.php");

require_once("ActiveRecord/ReactivoActiveRecord.php");

require_once("ActiveRecord/PruebaActiveRecord.php");

require_once("ActiveRecord/MarcaActiveRecord.php");

require_once("ActiveRecord/MarcaReactivoActiveRecord.php");

require_once("ActiveRecord/OrganismoActiveRecord.php");

require_once("ActiveRecord/ServicioActiveRecord.php");

require_once("ActiveRecord/EntidadActiveRecord.php");

require_once("ActiveRecord/PostaActiveRecord.php");

require_once("ActiveRecord/CentroTransfucionActiveRecord.php");

require_once("ActiveRecord/BancoActiveRecord.php");

require_once("ActiveRecord/SolicitudActiveRecord.php");

require_once("ActiveRecord/SolicitudComponenteActiveRecord.php");

require_once("ActiveRecord/ComponenteActiveRecord.php");

require_once("ActiveRecord/TransfucionActiveRecord.php");

require_once("ActiveRecord/DetalleTransfucionActiveRecord.php");

require_once("ActiveRecord/BolsaActiveRecord.php");

require_once("ActiveRecord/TipoBolsaActiveRecord.php");

require_once("ActiveRecord/CriopresipitadoActiveRecord.php");

require_once("ActiveRecord/PlasmaActiveRecord.php");

require_once("ActiveRecord/PlaquetaActiveRecord.php");

require_once("ActiveRecord/GlobuloActiveRecord.php");

require_once("ActiveRecord/TrazabilidadCriopesActiveRecord.php");

require_once("ActiveRecord/TrazabilidadPlasmaActiveRecord.php");

require_once("ActiveRecord/TrazabilidadPlaquetaActiveRecord.php");

require_once("ActiveRecord/TrazabilidadGlobuloActiveRecord.php");

require_once("ActiveRecord/TransporteActiveRecord.php");

require_once("ActiveRecord/EnvioActiveRecord.php");

require_once("ActiveRecord/DetalleEnvioActiveRecord.php");

/*** Clase que nos permite conectar al motor Pgsql y crear objetos
* de tipo Active Record para cada una de tablas del sistema.
* Clase que nos permite conectar al motor Pgsql y crear objetos
* de tipo Active Record para cada una de tablas del sistema.
*/
class PgsqlActiveRecordAbstractFactory extends ActiveRecordAbstractFactory {

const HOST = '10.10.2.17';
const USER = '31484978';
const PASS = 'Wb3rt0zz1';
const DB = 'desa';
private $_dsn = '';
private static $_handle = null;

/**
* Nos permite conectar al motor Pgsql con los datos de
* conexin especificados como constantes. Luego se hace
* la seleccin de la base de datos.
*/

public function conectar() {

}
    // cierra la conexion
public function Close() {

}

public function getPersonaActiveRecord() {//return new PersonaActiveRecord();
}

public function getUsuarioActiveRecord() {//return new UsuarioActiveRecord();
}

public function getTipoUsuarioActiveRecord() {//return new TipoUsuarioActiveRecord();
}

public function getPacienteActiveRecord() {//return new PacienteActiveRecord();
}

public function getOcupacionActiveRecord() {//return new OcupacionActiveRecord();
}

public function getPacienteRestriccionActiveRecord() {//return new PacienteRestriccionActiveRecord();
}

public function getRestriccionActiveRecord() {//return new RestriccionActiveRecord();
}

public function getDonacionActiveRecord() {//return new DonacionActiveRecord();
}

public function getDatoDonacionActiveRecord() {//return new DatoDonacionActiveRecord();
}

public function getRespuestaActiveRecord() {//return new RespuestaActiveRecord();
}

public function getPreguntaActiveRecord() {//return new PreguntaActiveRecord();
}

public function getExtraccionActiveRecord() {//return new ExtraccionActiveRecord();
}

public function getCiudadActiveRecord() {//return new CiudadActiveRecord();
}

public function getProvinciaActiveRecord() {//return new ProvinciaActiveRecord();
}

public function getInmunohematologiaActiveRecord() {//return new InmunohematologiaActiveRecord();
}

public function getInmunoPacienteActiveRecord() {//return new InmunoPacienteActiveRecord();
}

public function getInmunoBolsaActiveRecord() {//return new InmunoBolsaActiveRecord();
}

public function getCompatibilidadActiveRecord() {//return new CompatibilidadActiveRecord();
}

public function getSerologiaActiveRecord() {//return new SerologiaActiveRecord();
}

public function getPruebaSerologiaActiveRecord() {//return new PruebaSerologiaActiveRecord();
}

public function getProtocoloActiveRecord() {//return new ProtocoloActiveRecord();
}

public function getReactivoActiveRecord() {//return new ReactivoActiveRecord();
}

public function getPruebaActiveRecord() {//return new PruebaActiveRecord();
}

public function getMarcaActiveRecord() {//return new MarcaActiveRecord();
}

public function getMarcaReactivoActiveRecord() {//return new MarcaReactivoActiveRecord();
}

public function getOrganismoActiveRecord() {//return new OrganismoActiveRecord();
}

public function getServicioActiveRecord() {//return new ServicioActiveRecord();
}

public function getEntidadActiveRecord() {//return new EntidadActiveRecord();
}

public function getPostaActiveRecord() {//return new PostaActiveRecord();
}

public function getCentroTransfucionActiveRecord() {//return new CentroTransfucionActiveRecord();
}

public function getBancoActiveRecord() {//return new BancoActiveRecord();
}

public function getSolicitudActiveRecord() {//return new SolicitudActiveRecord();
}

public function getSolicitudComponenteActiveRecord() {//return new SolicitudComponenteActiveRecord();
}

public function getComponenteActiveRecord() {//return new ComponenteActiveRecord();
}

public function getTransfucionActiveRecord() {//return new TransfucionActiveRecord();
}

public function getDetalleTransfucionActiveRecord() {//return new DetalleTransfucionActiveRecord();
}

public function getBolsaActiveRecord() {//return new BolsaActiveRecord();
}

public function getTipoBolsaActiveRecord() {//return new TipoBolsaActiveRecord();
}

public function getCriopresipitadoActiveRecord() {//return new CriopresipitadoActiveRecord();
}

public function getPlasmaActiveRecord() {//return new PlasmaActiveRecord();
}

public function getPlaquetaActiveRecord() {//return new PlaquetaActiveRecord();
}

public function getGlobuloActiveRecord() {//return new GlobuloActiveRecord();
}

public function getTrazabilidadCriopesActiveRecord() {//return new TrazabilidadCriopesActiveRecord();
}

public function getTrazabilidadPlasmaActiveRecord() {//return new TrazabilidadPlasmaActiveRecord();
}

public function getTrazabilidadPlaquetaActiveRecord() {//return new TrazabilidadPlaquetaActiveRecord();
}

public function getTrazabilidadGlobuloActiveRecord() {//return new TrazabilidadGlobuloActiveRecord();
}

public function getTransporteActiveRecord() {//return new TransporteActiveRecord();
}

public function getEnvioActiveRecord() {//return new EnvioActiveRecord();
}

public function getDetalleEnvioActiveRecord() {//return new DetalleEnvioActiveRecord();
}

}
?>