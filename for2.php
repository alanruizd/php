<!doctype html>
<html>
    <head>
        <title>Edad</title>
        <meta charset="UTF=8"/>
        <style>
        .estilo_par{
            color:red;
        } 
        .estilo_impar{
            color:yellow;
        }
        </style>
        </head>
        <body>
            <?php
            for($x = 1 ; $x <= 100 ; $x++){
                if($x % 2 == 0){
                    echo "<p class='estilo_par'> $x </p>";
                }else{
                    echo "<p class='estilo_impar'> $x </p>";
                }
            }
            ?>
            </body>
            </html>