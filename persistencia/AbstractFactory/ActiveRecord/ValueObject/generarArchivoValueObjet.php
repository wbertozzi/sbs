<?php

include_once '../../nombreTabla.php';

foreach ($arrayNombreArchivo as $archivo) {
    $nomArchivoCreado = $archivo . "ValueObject.php";
    $nomClaseCreado = $archivo . "ValueObject";
    $ar = fopen($nomArchivoCreado, "a") or
            die("Problemas en la creacion");

    $texto = "<?php";
    $texto .= "\n";
    $texto .= "class $nomClaseCreado {";
    $texto .= "\n";
    $texto .= "private \$_don_num_donacion;";
    $texto .= "\n";
    $texto .= "\n";
    $texto .= "}";
    $texto .= "\n";
    $texto .= "?>";



    fputs($ar, $texto);
    fclose($ar);
}
echo "Los datos se cargaron correctamente.";
?>