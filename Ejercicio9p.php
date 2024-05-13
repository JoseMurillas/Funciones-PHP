<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        function epoch($fecha){
            date_default_timezone_set("America/Bogota");
            $fecha = date("'Y-m-d H:i:s'");
            $fechaEpoch = date("U".strtotime($fecha));
            return $fechaEpoch;
        }
        
        echo epoch("");
    ?>
</body>
</html>