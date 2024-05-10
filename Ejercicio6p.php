<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6 </title>
</head>
<body>
    <?php 
        function ciudad($ciudad){
            switch ($ciudad) {
                case "1":
                    date_default_timezone_set("America/Bogota");
                    $fecha = date("h:i:s a"." "."l");
                    return "Bogota ".$fecha;
                case "2":
                    date_default_timezone_set("America/Adak");
                    $fecha = date("h:i:s a"." "."l");
                    return "Adak ".$fecha;
                case "3":
                    date_default_timezone_set("America/Anchorage");
                    $fecha = date("h:i:s a"." "."l");
                    return "Anchorage ".$fecha;
                case "4":
                    date_default_timezone_set("America/Anguilla");
                    $fecha = date("h:i:s a"." "."l");
                    return "Anguilla ".$fecha;
                case "5":
                    date_default_timezone_set("America/Antigua");
                    $fecha = date("h:i:s a"." "."l");
                    return "Antigua ".$fecha;
                case "6":
                    date_default_timezone_set("America/Aruba");
                    $fecha = date("h:i:s a"." "."l");
                    return "Aruba ".$fecha;
                case "7":
                    date_default_timezone_set("America/Asuncion");
                    $fecha = date("h:i:s a"." "."l");
                    return "Asuncion ".$fecha;
                case "8":
                    date_default_timezone_set("America/Atikokan");
                    $fecha = date("h:i:s a"." "."l");
                    return "Atikokan ".$fecha;
                case "9":
                    date_default_timezone_set("America/Cancun");
                    $fecha = date("h:i:s a"." "."l");
                    return "Cancun ".$fecha;
                case "10":
                    date_default_timezone_set("America/Cayman");
                    $fecha = date("h:i:s a"." "."l");
                    return "Cayman ".$fecha;
            }
        }
        $ciudad = $_POST["ciudades"];
        echo "".ciudad($ciudad);
    ?>
</body>
</html>