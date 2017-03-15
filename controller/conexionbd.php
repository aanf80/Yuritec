<?php
/**
 * Created by PhpStorm.
 * User: Armando_Navarro
 * Date: 30/11/2016
 * Time: 12:28 PM
 */

$dbserver = "localhost";
$dbuser = "root";
$password = "";
$dbname = "revista";

$database = new mysqli($dbserver, $dbuser, $password, $dbname);

if($database -> connect_errno){
    die("No se pudo conectar a la base de datos");
}

?>

