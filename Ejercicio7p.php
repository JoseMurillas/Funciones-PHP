<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        function ejercicio7($clase){
            echo"En el día de hoy ",date("d")," de mes ", date("m")," del año ",date("Y"), " Estamos en clases de php";
        }
        echo ejercicio7("")."<br><br>";

        function ejercicio8($termina){
            date_default_timezone_set("America/Bogota");
            $fechaFormateada = new DateTime();
            $horaFinal = new DateTime ('6:00:00');
            $diferencia = $horaFinal ->diff($fechaFormateada);
           return$diferencia->format('%i');
        }
        echo "La clase se termina en ". ejercicio8('');
    ?>
</body>
</html>