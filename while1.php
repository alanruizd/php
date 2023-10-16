<!DOCTYPE HTML>
<HTML>
    <head>
        <title>Temperatura</title>
        <Meta charset="UTF-8"/>
</head>
<body>
    <?php
    $temperatura = 0;
    while($temperatura <= 250){
        echo "<p style='color:rgb($temperatura,0,0)'>";
        echo "La temperatura es: $temperatura";
        echo "<br>";
        $temperatura++;
    }
    ?>
    </body>
    </html>