<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <?php 
        function etapaProductiva($fecha){
            date_default_timezone_set("America/Bogota");
            $fechaFormateada = new DateTime($fecha);
            $fechaFormateada->modify('- 6 months');
           return$fechaFormateada->format('Y-m-d');
        }
        $fecha = $_POST["fecha"];
        echo "Su etapa productiva inicia: ".etapaProductiva($fecha);
    ?>
</body>
</html>