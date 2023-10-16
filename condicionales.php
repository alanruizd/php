<!DOCTYPE html>
<html>
    <head>
        <title>Edad</title>
        <Meta charset="UTF-8"/>
</head>
<body>
    <?php
    $edad = 20;

    if($edad >= 18 && $edad < 60){
        echo "Eres mayor de edad";
    }else if ($edad < 18 && $edad>14){
        echo "Eres menor de edad";
    }else{
        echo "Algo anda mal :( ";
    }
    ?>
    </body>
    </html>
    