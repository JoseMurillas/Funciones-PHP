<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>
    <?php 
        date_default_timezone_set("America/Bogota");
        function clase($claseTermina){
            date_default_timezone_set("America/Bogota");
            $fecha = new DateTime();
            $horaTermina = new DateTime("16:00:00");

            $claseTermina = $fecha->diff($horaTermina);
            echo"La clase de hoy termina en ". $claseTermina->format("%i") ." minutos";
        }
        echo clase("");
    ?>
</body>
</html>