<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        function quincenal($sueldo, $opcione){
            $subsidioTransporte = 106454;
            $sueldoSeguridadSocial = ($sueldo + $subsidioTransporte)*0.08;
            $sueldoMensual = ($sueldo + $subsidioTransporte)-$sueldoSeguridadSocial;
            switch ($opcione) {
                case "si":
                    $sueldoDescuento = $sueldoMensual * 0.10;
                    $sueldoTotal = $sueldoMensual - $sueldoDescuento;
                    $sueldoQuincena = $sueldoTotal/2;
                    return $sueldoQuincena;
                case "no":
                    $sueldoQuincena = $sueldoMensual/2;
                    return $sueldoQuincena;
            }
   
        }
        $sueldo =$_POST ["sueldo"];
        $opcione = $_POST["opciones"];
        echo"Su sueldo quincenal es: ", quincenal($sueldo, $opcione),"";
    ?>
</body>
</html>