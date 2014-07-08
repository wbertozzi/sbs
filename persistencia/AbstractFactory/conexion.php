<?php
/**
* Clase que nos permite conectarse a la base de datos
*
* @copyright  Copyright (c) 2013 
* @license    http://www.gnu.org/licenses/   GPL License
* @version    1.0
* @since      Class available since Release 1.0
*/

final class ConexionDAO {
 
    private static $_handle = null;
    private  $_user ;
    private  $_password ;		
    private  $_prueba;
    private static $_options = array(PDO::ATTR_PERSISTENT=> true); 	
    private $_dsn = '';
    private function __construct()
    {
        if (isset($_SESSION['usuario']))
                $this->_user=$_SESSION['usuario'];
        else 			$this->_user='';

        if (isset($_SESSION['clave']))
                $this->_password=$_SESSION['clave'];
        else 	$this->_password='';
    }
    private function __clone()
    {
    }

    public static function getConexion($parametros) {
        if( !(self::$_handle instanceof self ))	{
                $obj = new ConexionDAO();
                $obj->_prueba = $obj->_dsn;
                $obj->_dsn = 'oci8://'.trim($obj->_user).':'.trim($obj->_password).'@(DESCRIPTION=(ADDRESS=(PROTOCOL=TCP)(HOST=10.10.2.16)(PORT=1526))(CONNECT_DATA=(SERVICE_NAME=test)))/?charset=AL32UTF8';		
                self::$_handle = NewADOConnection($obj->_dsn);
        }
        return self::$_handle;
    }

    public static function obtenerConexion()
    {
        $dbh = ConexionDAO::getConexion();
        return $dbh;
    }	
}
?>