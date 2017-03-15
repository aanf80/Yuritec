<?php
/**
 * Created by PhpStorm.
 * User: Concurso18
 * Date: 07/03/2017
 * Time: 11:23 AM
 */

include("../../controller/conexionbd.php");

$nombreCategoria = $_POST["nombreCategoria"];

$jsondata = array();
$respuesta = 1;

$sql = "INSERT INTO category (categoryname) VALUES ('". $nombreCategoria."')";
mysqli_query($database,$sql) or $respuesta = 0;

if($respuesta == 1){
    $jsondata["code"] = 200;
    $jsondata["msg"] = "Registrado correctamente";
    $jsondata["details"] = "OK";
}else{
    $jsondata["code"] = 500;
    $jsondata["msg"] = "Error en el registro";
    $jsondata["details"] = "OK";
}

header('Content-type: application/json; charset=utf-8');
header("Cache-Control: no-store");
echo json_encode($jsondata, JSON_FORCE_OBJECT);
$database->close();
exit();
?>