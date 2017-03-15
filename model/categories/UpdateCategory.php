<?php
/**
 * Created by PhpStorm.
 * User: Concurso18
 * Date: 07/03/2017
 * Time: 11:23 AM
 */
include("../../controller/conexionbd.php");
$categoryid = $_POST["categoryid"];
$categoryname = $_POST["categoryname"];


$jsondata = array();
$respuesta = 1;

$sql = "UPDATE category SET categoryname='". $categoryname ."' WHERE categoryid = ". $categoryid;

mysqli_query($database,$sql) or $respuesta = 0;

if($respuesta == 1){
    $jsondata["code"] = 200;
    $jsondata["msg"] = "Registro actualizado correctamente";
    $jsondata["details"] = "OK";
}else{
    $jsondata["code"] = 500;
    $jsondata["msg"] = "Error en la actualización";
    $jsondata["details"] = "OK";
}

header('Content-type: application/json; charset=utf-8');
header("Cache-Control: no-store");
echo json_encode($jsondata, JSON_FORCE_OBJECT);
$database->close();
exit();

?>