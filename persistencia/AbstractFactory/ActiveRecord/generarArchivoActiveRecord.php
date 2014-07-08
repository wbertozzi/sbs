<?php

session_start();

include_once '../nombreTabla.php';
foreach ($arrayNombreArchivo as $archivo) {
    $nomArchivoCreado = $archivo . "ActiveRecord.php";
    $nomClaseCreado = $archivo . "ActiveRecord";
    $ar = fopen($nomArchivoCreado, "a");

    $i = 0;
    $maxleng = strlen($archivo) - 1;
    $nomTabla = $archivo;
    for ($i = 0; $i < $maxleng; $i++) {
        if ($archivo[$i] == strtoupper($archivo[$i]) && $i != 0) {
            $remplaza = "_" . $archivo[$i];
            $nomTabla = str_replace($archivo[$i], $remplaza, $archivo);
        }
    }
    if ($nomTabla[0] == "_") {
        $nomTabla = substr($nomTabla, 1);
    }

    $nomArchivo = $archivo . "ValueObject.php";
    $nombreValueObject = "\$" . $archivo . "ValueObject";
    $nomTabla = strtolower($nomTabla);
    $texto = "<?php";
    $texto .= "\n";
    $texto .= "// Se requiere la intefaz ActiveRecord";
    $texto .= "\n";
    $texto .= "require_once(\"ActiveRecordInterface.php\");";
    $texto .= "\n";
    $texto .= "// Se requiere la clase $nomArchivo";
    $texto .= "\n";
    $texto .= "require_once(\"ValueObject/$nomArchivo\");";
    $texto .= "\n";
    $texto .= "/**";
    $texto .= "\n";
    $texto .= "* Clase que nos permite operaciones de tipo CRUD (Active Record)";
    $texto .= "\n";
    $texto .= "* sobre la tabla $nomTabla.";
    $texto .= "\n";
    $texto .= "* Clase que nos permite operaciones de tipos CRUD y otras sobre";
    $texto .= "\n";
    $texto .= "* la tabla $nomTabla ubicada en el sbs de un motor BD.";
    $texto .= "\n";
    $texto .= "*/";
    $texto .= "\n";
    $texto .= "\n";
    $texto .= "class $nomClaseCreado implements ActiveRecord {";
    $texto .= "\n";
    $texto .= "\n";
    $texto .= "public function insert($nombreValueObject) {";
    $texto .= "\n";
    $texto .= "\$consulta = \"INSERT INTO $nomTabla ()\";";
    $texto .= "\n";
    $texto .= "\$consulta .= \" VALUES ()\";";
    $texto .= "\n";
    $texto .= "\$resultado = mysql_query(\$consulta);";
    $texto .= "\n";
    $texto .= "if (\$resultado) {";
    $texto .= "\n";
    $texto .= "return true;";
    $texto .= "\n";
    $texto .= "} else {";
    $texto .= "\n";
    $texto .= "return false;";
    $texto .= "\n";
    $texto .= "}";
    $texto .= "\n";
    $texto .= "}";
    $texto .= "\n";
    $texto .= "\n";
    $texto .= "public function update($nombreValueObject) {";
    $texto .= "\n";
    $texto .= "\$consulta = \"UPDATE $nomTabla SET \";";
    $texto .= "\n";
    $texto .= "\$consulta .= \" WHERE  = \";";
    $texto .= "\n";
    $texto .= "\n";
    $texto .= "\$resultado = mysql_query(\$consulta);";
    $texto .= "\n";
    $texto .= "if (\$resultado) {";
    $texto .= "\n";
    $texto .= "return true;";
    $texto .= "\n";
    $texto .= "} else {";
    $texto .= "\n";
    $texto .= "return false;";
    $texto .= "\n";
    $texto .= "}";
    $texto .= "\n";
    $texto .= "}";
    $texto .= "\n";
    $texto .= "\n";
    $texto .= "public function delete($nombreValueObject) {";
    $texto .= "\n";
    $texto .= "\$consulta = \"DELETE FROM $nomTabla WHERE \";";
    $texto .= "\n";
    $texto .= "\$resultado = mysql_query(\$consulta);";
    $texto .= "\n";
    $texto .= "if (\$resultado) {";
    $texto .= "\n";
    $texto .= "return true;";
    $texto .= "\n";
    $texto .= "} else {";
    $texto .= "\n";
    $texto .= "return false;";
    $texto .= "\n";
    $texto .= "}";
    $texto .= "\n";
    $texto .= "}";
    $texto .= "\n";
    $texto .= "\n";
    $texto .= "}";
    $texto .= "\n";
    $texto .= "?>";



    fputs($ar, $texto);
    fclose($ar);
    $_SESSION['contador'] = $_SESSION['contador'] + 1;
}
$ar = fopen("ActiveRecordInterface.php", "a");
$cuerpo = "<?php";
$cuerpo .= "\n";
$cuerpo .= "\n";
$cuerpo .= "/**";
$cuerpo .= "\n";
$cuerpo .= "* Archivo de la interfaz ActiveRecord.";
$cuerpo .= "\n";
$cuerpo .= "* Archivo de la interfaz ActiveRecord que nos realizar contratos";
$cuerpo .= "\n";
$cuerpo .= "* de implementacin con las clases que la implementen y como";
$cuerpo .= "\n";
$cuerpo .= "* ejemplo podemos mencionar todas las tablas que utilicen";
$cuerpo .= "\n";
$cuerpo .= "* ActiveRecord deben implementarla.";
$cuerpo .= "\n";
$cuerpo .= "*/";
$cuerpo .= "\n";
$cuerpo .= "interface ActiveRecord {";
$cuerpo .= "\n";
$cuerpo .= "\n";
$cuerpo .= "\n";
$cuerpo .= "public function insert(\$oValueObject);";
$cuerpo .= "\n";
$cuerpo .= "\n";
$cuerpo .= "\n";
$cuerpo .= "public function update(\$oValueObject);";
$cuerpo .= "\n";
$cuerpo .= "\n";
$cuerpo .= "\n";
$cuerpo .= "public function delete(\$oValueObject);";
$cuerpo .= "\n";
$cuerpo .= "}";
$cuerpo .= "\n";
$cuerpo .= "\n";
$cuerpo .= "\n";
$cuerpo .= "?>";
fputs($ar, $cuerpo);
fclose($ar);
$_SESSION['contador'] = $_SESSION['contador'] + 1;
header("Location: ValueObject/generarArchivoValueObjet.php");
?>