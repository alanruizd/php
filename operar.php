<?php
if ($_REQUEST['operación'] == "suma") {
    $suma = $_REQUEST['valor1'] + $_REQUEST['valor2'];
    echo "La suma es:" . $suma;
} else {
    if ($_REQUEST['operación'] == "resta") {
        $resta = $_REQUEST['valor1'] - $_REQUEST['valor2'];
        echo "La resta es:" . $resta;
    }
}
?>