<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
            function procesarDatos() {
                date_default_timezone_set("America/Bogota");
                $fecha = date('Y-m-d H:i:s');

                $nombre = $_POST["nombre"];
                $direccion = $_POST["direccion"];
                $telefono = $_POST["telefono"];
                $correo = $_POST["correo"];
                
                $arreglos = array($nombre, $direccion, $telefono, $correo, $fecha);
                
                return $arreglos;
            }

            function mostrarDatos($datos) {
                foreach($datos as $dato) {
                    echo "<br>", $dato, " ";
                }
            }

            // Llamar a la función para procesar los datos
            $arreglos = procesarDatos();

            // Llamar a la función para mostrar los datos
            mostrarDatos($arreglos);
        ?>

    </form>

</body>
</html>