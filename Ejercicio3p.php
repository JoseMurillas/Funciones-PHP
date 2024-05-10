<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function calcularEdad($dia, $mes, $ano) {
            date_default_timezone_set("America/Bogota");
            $fecha = $ano . "-" . $mes . "-" . $dia;

            $fechaFormateada = new DateTime($fecha);
            $fechaActual = new DateTime();

            $edad = $fechaActual->diff($fechaFormateada);
            
            return $edad->y;
        }

        // Recuperar los valores del formulario
        $dia = $_POST["dia"];
        $mes = $_POST["mes"];
        $ano = $_POST["ahno"];

        // Llamar a la función calcularEdad() y mostrar el resultado
        echo "Su edad es: " . calcularEdad($dia, $mes, $ano);
    ?>

</body>
</html>