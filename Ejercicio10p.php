<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        function bisiesto($ahno){
            if(($ahno % 4 == 0 and $ahno %100 != 0) or ($ahno % 400 == 0)){
                return "Es un año bisiesto ". $ahno;
            } else {
                return "No es bisiesto ". $ahno;
            }
        }
        $ahno = 2023;
        echo bisiesto($ahno);

    ?>
</body>
</html>