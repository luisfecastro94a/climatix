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
$direccionViento1 = $_GET["d"];
$direccionViento2 = $_GET["d1"];
$direccionViento3 = $_GET["d2"];
$direccionViento4 = $_GET["d3"];
$direccionViento5 = $_GET["d4"];
$direccionViento6 = $_GET["d5"];
$direccionViento7 =$_GET["d6"];
$direccionViento8 =$_GET["d7"];
$direccionViento9 =$_GET["d8"];
$direccionViento10=$_GET["d9"];
//variables enviadas por URL
$humedad1 = $_GET["h"];
$humedad2 = $_GET["h1"];
$humedad3 = $_GET["h2"];
$humedad4 = $_GET["h3"];
$humedad5 = $_GET["h4"];
$humedad6 = $_GET["h5"];
$humedad7 =$_GET["h6"];
$humedad8 =$_GET["h7"];
$humedad9 =$_GET["h8"];
$humedad10=$_GET["h9"]; 
//variables enviadas por URL
$humedadSuelo1 = $_GET["w"];
$humedadSuelo2 = $_GET["w1"];
$humedadSuelo3 = $_GET["w2"];
$humedadSuelo4 = $_GET["w3"];
$humedadSuelo5 = $_GET["w4"];
$humedadSuelo6 = $_GET["w5"];
$humedadSuelo7 =$_GET["w6"];
$humedadSuelo8 =$_GET["w7"];
$humedadSuelo9 =$_GET["w8"];
$humedadSuelo10=$_GET["w9"];
//variables enviadas por URL
$lluvia1 = $_GET["l"];
$lluvia2 = $_GET["l1"];
$lluvia3 = $_GET["l2"];
$lluvia4 = $_GET["l3"];
$lluvia5 = $_GET["l4"];
$lluvia6 = $_GET["l5"];
$lluvia7 =$_GET["l6"];
$lluvia8 =$_GET["l7"];
$lluvia9 =$_GET["l8"];
$lluvia10=$_GET["l9"];
//variables enviadas por URL
$presionAtmosferica1 = $_GET["po1"];
$presionAtmosferica2 = $_GET["po2"];
//variables enviadas por URL
$temperatura1 = $_GET["t1"];
$temperatura2 = $_GET["t2"];
$temperatura3 = $_GET["t3"];
$temperatura4 = $_GET["t4"];
$temperatura5 = $_GET["t5"];
$temperatura6 = $_GET["t6"];
$temperatura7 = $_GET["t7"];
$temperatura8 = $_GET["t8"];
$temperatura9 = $_GET["t9"];
$temperatura10 = $_GET["t10"];
//variables enviadas por URL
$temperaturaSuelo1 = $_GET["s1"];
$temperaturaSuelo2 = $_GET["s2"];
$temperaturaSuelo3 = $_GET["s3"];
$temperaturaSuelo4 = $_GET["s4"];
$temperaturaSuelo5 = $_GET["s5"];
$temperaturaSuelo6 = $_GET["s6"];
$temperaturaSuelo7 = $_GET["s7"];
$temperaturaSuelo8 = $_GET["s8"];
$temperaturaSuelo9 = $_GET["s9"];
$temperaturaSuelo10 = $_GET["s10"];
//variables enviadas por URL
$uv1 = $_GET["uv1"];
$uv2 = $_GET["uv2"];
$uv3 = $_GET["uv3"];
$uv4 = $_GET["uv4"];
$uv5 = $_GET["uv5"];
$uv6 = $_GET["uv6"];
$uv7 = $_GET["uv7"];
$uv8 = $_GET["uv8"];
$uv9 = $_GET["uv9"];
$uv10 = $_GET["uv10"];
//variables enviadas por URL
$velocidadViento1 = $_GET["vv1"];
$velocidadViento2 = $_GET["vv2"];
$velocidadViento3 = $_GET["vv3"];
$velocidadViento4 = $_GET["vv4"];
$velocidadViento5 = $_GET["vv5"];
$velocidadViento6 = $_GET["vv6"];
$velocidadViento7 = $_GET["vv7"];
$velocidadViento8 = $_GET["vv8"];
$velocidadViento9 = $_GET["vv9"];
$velocidadViento10 = $_GET["vv10"];

$current_date = date("Y-m-d"); 
$current_time = date("H:i:s");

//url a enviar
/*estructura.php?estacion=1&d=17&d1=10.4&d2=0.3&d3=3.4&d4=3.3&d5=13,3&d6=0.3&d7=1.2&d8=0.0&d9=3&d10=3.3&h=3&h1=3&h2=3&h3=3&h4=3&h5=3&h6=3&h7=3&h8=3&h9=39&w=2&w1=2&w2=2&w3=2&w4=2&w5=2&w6=2&w7=2&w8=2&w9=2&w10=2&l=3.0&l1=3.0&l2=3.0&l3=3.0&l4=3.0&l5=3.0&l6=3.0&l7=3.0&l8=3.0&l9=3.0&po1=0.0&po2=0.2&t1=10&t2=13&t3=10&t4=14&t5=18&t6=20&t7=30&t8=60&t9=0.6&t10=20&s1=20&s2=2&s3=4&s4=0.6&s5=1.2&s6=1.3&s7=0.7&s8=1.3&s9=0.1&s10=20&uv1=0.2&uv2=0.0&uv3=0.3&uv4=0.2&uv5=0.2&uv6=0.9&uv7=0.1&uv8=0.3&uv9=0.10&uv10=0.2&vv1=10&vv2=13&vv3=20&vv4=30&vv5=43&vv6=10&vv7=23&vv8=29&vv9=43&vv10=13*/


// Valida que esten presente todos los parametros
if (($estacion!="") and ($direccionViento1!="") and ($direccionViento2!="") and ($direccionViento3!="") and ($direccionViento4!="") and ($direccionViento5!="") and ($direccionViento6!="") and ($direccionViento7!="") and ($direccionViento8!="") and ($direccionViento9!="")and ($direccionViento10!="") and ($humedad1!="") and ($humedad2!="") and ($humedad3!="") and ($humedad4!="") and ($humedad5!="") and ($humedad6!="") and ($humedad7!="") and ($humedad8!="") and ($humedad9!="")and ($humedad10!="") and ($humedadSuelo1!="") and ($humedadSuelo2!="") and ($humedadSuelo3!="") and ($humedadSuelo4!="") and ($humedadSuelo5!="") and ($humedadSuelo6!="") and ($humedadSuelo7!="") and ($humedadSuelo8!="") and ($humedadSuelo9!="")and ($humedadSuelo10!="") and ($lluvia1!="") and ($lluvia2!="") and ($lluvia3!="") and ($lluvia4!="") and ($lluvia5!="") and ($lluvia6!="") and ($lluvia7!="") and ($lluvia8!="") and ($lluvia9!="")and ($lluvia10!="") and ($presionAtmosferica1!="") and ($presionAtmosferica2!="") and ($temperatura1!="") and ($temperatura2!="") and ($temperatura3!="") and ($temperatura4!="") and ($temperatura5!="") and ($temperatura6!="") and ($temperatura7!="") and ($temperatura8!="") and ($temperatura9!="") and ($temperatura10!="") and ($temperaturaSuelo1!="") and ($temperaturaSuelo2!="") and ($temperaturaSuelo3!="") and ($temperaturaSuelo4!="") and ($temperaturaSuelo5!="") and ($temperaturaSuelo6!="") and ($temperaturaSuelo7!="") and ($temperaturaSuelo8!="") and ($temperaturaSuelo9!="") and ($temperaturaSuelo10!="") and ($uv1!="") and ($uv2!="") and ($uv3!="") and ($uv4!="") and ($uv5!="") and ($uv6!="") and ($uv7!="") and ($uv8!="") and ($uv9!="") and ($uv10!="") and ($velocidadViento1!="") and ($velocidadViento2!="") and ($velocidadViento3!="") and ($velocidadViento4!="") and ($velocidadViento5!="") and ($velocidadViento6!="") and ($velocidadViento7!="") and ($velocidadViento8!="") and ($velocidadViento9!="") and ($velocidadViento10!="")) 
{
    mysql_connect($mysql_servidor,$mysql_usuario,$mysql_clave) or 
       die("Imposible conectarse al servidor.");
    mysql_select_db($mysql_base) or die("Imposible abrir Base de datos");

//Inserta registros a la base de datos
    $sql = "insert into direccionviento (idestacion, date, time , direccionViento1, direccionViento2, direccionViento3, direccionViento4, direccionViento5, direccionViento6, direccionViento7, direccionViento8, direccionViento9, direccionViento10) 
            values ('$estacion','$current_date','$current_time','$direccionViento1','$direccionViento2','$direccionViento3','$direccionViento4','$direccionViento5','$direccionViento6','$direccionViento7','$direccionViento8','$direccionViento9', '$direccionViento10')";
    mysql_query($sql);

//Inserta registros a la base de datos
    $sql = "insert into humedad (idestacion, date, time , humedad1, humedad2, humedad3, humedad4, humedad5, humedad6, humedad7, humedad8, humedad9, humedad10) 
            values ('$estacion','$current_date','$current_time','$humedad1','$humedad2','$humedad3','$humedad4','$humedad5','$humedad6','$humedad7','$humedad8','$humedad9', '$humedad10')";
    mysql_query($sql);

 //Inserta registros a la base de datos
    $sql = "insert into humedadsuelo (idestacion, date, time , humedadSuelo1, humedadSuelo2, humedadSuelo3, humedadSuelo4, humedadSuelo5, humedadSuelo6, humedadSuelo7, humedadSuelo8, humedadSuelo9, humedadSuelo10) 
            values ('$estacion','$current_date','$current_time','$humedadSuelo1','$humedadSuelo2','$humedadSuelo3','$humedadSuelo4','$humedadSuelo5','$humedadSuelo6','$humedadSuelo7','$humedadSuelo8','$humedadSuelo9', '$humedadSuelo10')";
    mysql_query($sql);

//Inserta registros a la base de datos
    $sql = "insert into lluvia (idestacion, date, time , lluvia1, lluvia2, lluvia3, lluvia4, lluvia5, lluvia6, lluvia7, lluvia8, lluvia9, lluvia10) 
            values ('$estacion','$current_date','$current_time','$lluvia1','$lluvia2','$lluvia3','$lluvia4','$lluvia5','$lluvia6','$lluvia7','$lluvia8','$lluvia9', '$lluvia10')";
    mysql_query($sql);

    //Inserta registros a la base de datos
    $sql = "insert into presionatmosferica (idestacion, date, time , presionAtmosferica1, presionAtmosferica2) 
            values ('$estacion','$current_date','$current_time','$presionAtmosferica1','$presionAtmosferica2')";
    mysql_query($sql);

 //Inserta registros a la base de datos
    $sql = "insert into temperatura (idestacion, date, time , temperatura1, temperatura2, temperatura3, temperatura4, temperatura5, temperatura6, temperatura7, temperatura8, temperatura9, temperatura10) 
            values ('$estacion','$current_date','$current_time','$temperatura1','$temperatura2','$temperatura3','$temperatura4','$temperatura5','$temperatura6','$temperatura7','$temperatura8','$temperatura9','$temperatura10')";
    mysql_query($sql);

//Inserta registros a la base de datos
    $sql = "insert into temperaturasuelo (idestacion, date, time , temperaturaSuelo1, temperaturaSuelo2, temperaturaSuelo3, temperaturaSuelo4, temperaturaSuelo5, temperaturaSuelo6, temperaturaSuelo7, temperaturaSuelo8, temperaturaSuelo9, temperaturaSuelo10) 
            values ('$estacion','$current_date','$current_time','$temperaturaSuelo1','$temperaturaSuelo2','$temperaturaSuelo3','$temperaturaSuelo4','$temperaturaSuelo5','$temperaturaSuelo6','$temperaturaSuelo7','$temperaturaSuelo8','$temperaturaSuelo9','$temperaturaSuelo10')";
    mysql_query($sql);

//Inserta registros a la base de datos
    $sql = "insert into uv (idestacion, date, time , uv1, uv2, uv3, uv4, uv5, uv6, uv7, uv8, uv9, uv10) 
            values ('$estacion','$current_date','$current_time','$uv1','$uv2','$uv3','$uv4','$uv5','$uv6','$uv7','$uv8','$uv9','$uv10')";
    mysql_query($sql);

//Inserta registros a la base de datos
    $sql = "insert into velocidadviento (idestacion, date, time , velocidadViento1, velocidadViento2, velocidadViento3, velocidadViento4, velocidadViento5, velocidadViento6, velocidadViento7, velocidadViento8, velocidadViento9, velocidadViento10) 
            values ('$estacion','$current_date','$current_time','$velocidadViento1','$velocidadViento2','$velocidadViento3','$velocidadViento4','$velocidadViento5','$velocidadViento6','$velocidadViento7','$velocidadViento8','$velocidadViento9','$velocidadViento10')";
    mysql_query($sql);

}

?>