<!doctype html>
<html>
    <head>
    <title>Comparar dos números</title>
    <meta charset="UTF-8"/>"
</head>
<body>
    <?php
    //esto es un comentario
    //las variables inician con el simbolo de $ (pesos)
    $numero_1 = 10;
    $numero_2 = 20;

    #condicional si..sino..
    if($numero_1 > $numero_2){
        echo("El número mayor es NUMERO_1 que es igual a ". $numero_1);
    }else{
        echo("El número mayor es NUMERO_2 que es igual a ". $numero_2);
    }
    ?>
    </body>
    </html>