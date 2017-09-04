<?php
//
// Script para recolectar datos enviados por arduinos conectados a la red
//
// Parametros de base de datos
$mysql_servidor = "localhost";
$mysql_base = "climatix2";
$mysql_usuario = "root";
$mysql_clave = "";

//variables enviadas por URL
$estacion = $_GET["estacion"];
$temperatura = $_GET["t"];
$humedad = $_GET["h"];
$lluvia = $_GET["ll"];
$presionAtmosferica= $_GET["pa"];
$direccionViento= $_GET["dv"];
$velocidadViento= $_GET["vv"];
$humedadSuelo=$_GET["hs"];
$temperaturaSuelo=$_GET["ts"];
$uv=$_GET["uv"];
$current_date = date("Y-m-d"); 
$current_time = date("H:i:s"); 

// Valida que esten presente todos los parametros
if (($estacion!="") and ($temperatura!="") and ($humedad!="") and ($lluvia!="") and ($presionAtmosferica!="") and ($direccionViento!="") and ($velocidadViento!="") and ($humedadSuelo!="") and ($temperaturaSuelo!="") and ($uv!="")) {
    mysql_connect($mysql_servidor,$mysql_usuario,$mysql_clave) or 
       die("Imposible conectarse al servidor.");
    mysql_select_db($mysql_base) or die("Imposible abrir Base de datos");

//Inserta registros a la base de datos
    $sql = "insert into climatix (estacion, date, time , temperatura, humedad, presionAtmosferica, lluvia, direccionViento, velocidadViento, humedadSuelo, temperaturaSuelo, uv) 
            values ('$estacion','$current_date','$current_time','$temperatura','$humedad','$presionAtmosferica','$lluvia','$direccionViento','$velocidadViento','$humedadSuelo','$temperaturaSuelo','$uv')";
    mysql_query($sql);

//url a enviar --todos las variables deben tener un dato, por lo menos un valor 0--
//sensorarduino.php?estacion=65&t=17&h=10.4&lluvia=0.3&PA=3.4&dv=3.3&vv=13,3&hs=0.3&ts=1.2&uv=0.0--
}

?>