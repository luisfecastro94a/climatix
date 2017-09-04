<?php
date_default_timezone_set('America/Santiago');

$conn       = null;
$MAX_TEMP   = 30;

if(isset($_GET["e1"])) {
    global $conn;

    $config     = parse_ini_file('ts_config.ini',TRUE);
    $servername = $config['database']['servername'];
    $username   = $config['database']['username'];
    $password   = $config['database']['password'];
    $dbname     = $config['database']['dbname'];

    $conn       = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $current_date = date("Y-m-d"); 
    $current_time = date("H:i:s"); 
    $company_id = $_GET["e1"];//$_GET["estacion"];


//ejemplo para caida de dato horizontalmente
        foreach ($_GET as $key => $value) {
        if(startsWith($key, "t")) 
        {
            if($company_id == "64")
            {
                if($key == "temp")
                    $key = "temp";
            }
            $sql = "INSERT INTO estacion_64 (estacion,date,time,temperatura,humedad,presion_atmosferica,lluvia,direccion_viento,velocidad_viento,humedad_suelo,temperatura_suelo,uv) VALUES ('$company_id','$key','$current_date','$current_time','$value')";
            $result = $conn->query($sql);

            if($company_id != '64')
            /// TODO Check if the company is set to send notifications (from the db) by email and send it to them
            checkTemp($key, $value);
        }
    }

  //insertar temperatura
    foreach ($_GET as $key => $value) {
        if(startsWith($key, "t")) 
        {
            if($company_id == "64")
            {
                if($key == "temp")
                    $key = "temp";
            }
            $sql = "INSERT INTO estacion_64 (e1,sensor_id,date,time,data) VALUES ('$company_id','$key','$current_date','$current_time','$value')";
            $result = $conn->query($sql);

            if($company_id != '64')
            /// TODO Check if the company is set to send notifications (from the db) by email and send it to them
            checkTemp($key, $value);
        }
    }

    //insertar humedad
        foreach ($_GET as $key => $value) {
        if(startsWith($key, "h")) 
        {
            if($company_id == "64")
            {
                if($key == "hume")
                    $key = "hume";
            }
            $sql = "INSERT INTO estacion_64 (e1,sensor_id,date,time,data) VALUES ('$company_id','$key','$current_date','$current_time','$value')";
            $result = $conn->query($sql);

            if($company_id != '64')
            /// TODO Check if the company is set to send notifications (from the db) by email and send it to them
            checkTemp($key, $value);
        }
    }
        //insertar presion atmosferica
        foreach ($_GET as $key => $value) {
        if(startsWith($key, "p")) 
        {
            if($company_id == "64")
            {
                if($key == "presiO")
                    $key = "presiO";
            }
            $sql = "INSERT INTO estacion_64 (e1,sensor_id,date,time,data) VALUES ('$company_id','$key','$current_date','$current_time','$value')";
            $result = $conn->query($sql);

            if($company_id != '64')
            /// TODO Check if the company is set to send notifications (from the db) by email and send it to them
            checkTemp($key, $value);
        }
    }
        //insertar lluvia
        foreach ($_GET as $key => $value) {
        if(startsWith($key, "l")) //cuando comienze con letra ""
        {
            if($company_id == "64")
            {
                if($key == "llu")
                    $key = "llu";
            }
            $sql = "INSERT INTO estacion_64 (e1,sensor_id,date,time,data) VALUES ('$company_id','$key','$current_date','$current_time','$value')";
            $result = $conn->query($sql);

            if($company_id != '64')
            /// TODO Check if the company is set to send notifications (from the db) by email and send it to them
            checkTemp($key, $value);
        }
    }
        //insertar direccion del viento
        foreach ($_GET as $key => $value) {
        if(startsWith($key, "d")) //cuando comienze con letra ""
        {
            if($company_id == "64")
            {
                if($key == "direcV")
                    $key = "direcV";
            }
            $sql = "INSERT INTO estacion_64 (e1,sensor_id,date,time,data) VALUES ('$company_id','$key','$current_date','$current_time','$value')";
            $result = $conn->query($sql);

            if($company_id != '64')
            /// TODO Check if the company is set to send notifications (from the db) by email and send it to them
            checkTemp($key, $value);
        }
    }
        //insertar velocidad del viento
        foreach ($_GET as $key => $value) {
        if(startsWith($key, "v")) //cuando comienze con letra ""
        {
            if($company_id == "64")
            {
                if($key == "veloV")
                    $key = "veloV";
            }
            $sql = "INSERT INTO estacion_64 (e1,sensor_id,date,time,data) VALUES ('$company_id','$key','$current_date','$current_time','$value')";
            $result = $conn->query($sql);

            if($company_id != '64')
            /// TODO Check if the company is set to send notifications (from the db) by email and send it to them
            checkTemp($key, $value);
        }
    }
        //insertar  temperatura de suelo
        foreach ($_GET as $key => $value) {
        if(startsWith($key, "s")) //cuando comienze con letra ""
        {
            if($company_id == "64")
            {
                if($key == "sueloH")
                    $key = "sueloH";
            }
            $sql = "INSERT INTO estacion_64 (e1,sensor_id,date,time,data) VALUES ('$company_id','$key','$current_date','$current_time','$value')";
            $result = $conn->query($sql);

            if($company_id != '64')
            /// TODO Check if the company is set to send notifications (from the db) by email and send it to them
            checkTemp($key, $value);
        }
    }
        //insertar humedad de suelo
        foreach ($_GET as $key => $value) {
        if(startsWith($key, "f")) //cuando comienze con letra ""
        {
            if($company_id == "64")
            {
                if($key == "floortemp")
                    $key = "floortemp";
            }
            $sql = "INSERT INTO estacion_64 (e1,sensor_id,date,time,data) VALUES ('$company_id','$key','$current_date','$current_time','$value')";
            $result = $conn->query($sql);

            if($company_id != '64')
            /// TODO Check if the company is set to send notifications (from the db) by email and send it to them
            checkTemp($key, $value);
        }
    }
    $conn->close();
    echo "SAVED";
}

function startsWith($haystack, $needle){
  return strncmp($haystack, $needle, strlen($needle))===0;
}


function checkTemp($key, $temp) {
    global  $MAX_TEMP;// = 40;
    $text = null;
    
    if (intval($temp) >= intval($MAX_TEMP)) {
        $text = "El sensor '" . $key . "' detectó una temperatura de " . $temp . "°C,\r\n<br /> valor superior al máximo aceptado de " . $MAX_TEMP . "°C.\r\n<br /> Tecnovum";
    }

    if ($temp == "-127") {
        $text = "Hay una conexion inestable, Parametro fuera de rango.\r\n<br /> Favor verificar conexion de sensor.\r\n<br /> Tecnovum";
    }

    if($text != null)
        sendEmail($text);
}



?>