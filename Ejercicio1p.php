<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Times+New+Roman&display=swap" rel="stylesheet">
    <style>
        body{
            font-family: 'Times New Roman', Times, serif;
        }
    </style>
</head>
<body>
    <?php
        // Función que realiza todas las operaciones
        function calcular($numero1, $numero2, $operacion) {
            switch ($operacion) {
                case "suma":
                    return $numero1 + $numero2;
                case "resta":
                    return $numero1 - $numero2;
                case "multiplicacion":
                    return $numero1 * $numero2;
                case "division":
                    if ($numero2 == 0) {
                        return "Error: División por cero";
                    } else {
                        return $numero1 / $numero2;
                    }
                case "porcentaje":
                    return ($numero1 / 100) * $numero2;
                case "potencia":
                    return pow($numero1, $numero2);
                case "raiz":
                    return array(sqrt($numero1), sqrt($numero2));
                default:
                    return "Operación no válida";
            }
        }

        // Se almacenan los datos que el usuario ingrese y seleccione mediante el radio
        $numero1 = $_GET["numero1"];
        $numero2 = $_GET["numero2"];
        $operacion = $_GET["opciones"];

        // Se llama a la función calcular y se muestra el resultado
        $resultado = calcular($numero1, $numero2, $operacion);

        if (is_array($resultado)) {
            echo "El resultado es para numero 1: " . $resultado[0] . "<br>";
            echo "El resultado es para numero 2: " . $resultado[1];
        } else {
            echo "El resultado es: " . $resultado;
        }   
    ?>
</body>
</html>