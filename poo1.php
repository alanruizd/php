<?php
class Automovil {
    public $color;
    public $motor;
    public $marca;

    public function obtener_color()
    {
        return $this->color;
    }
    public function obtener_motor()
    {
        return $this->motor;
    }
    public function obtener_marca()
    {
        return $this->marca;
    }
}
//crear 3 objetos de tipo automovil
$auto1 = new Automovil();
$auto1 ->color = 'verde';
$auto1 ->motor = 2.0;
$auto1 ->marca = 'Toyota';

$auto2 = new Automovil();
$auto2 ->color = 'gris';
$auto2 ->motor = 1.5;
$auto2 ->marca = 'Ford';

$auto3 = new Automovil();
$auto3 ->color = 'azul';
$auto3 ->motor = 2.5;
$auto3 ->marca = 'Kia';
//agregar un tercer
?>
<h3>Detalles de los autos </h3>
<?php
echo "Color del primer auto: ".$auto1->obtener_color();
echo "<br>Motor del primer auto: ".$auto1->obtener_motor();
echo "<br>Marca del Primer auto: ".$auto1->obtener_marca();
?>
<br>
<?php
echo "<br>Color del segundo auto: ".$auto2->obtener_color();
echo "<br>Motor del segundo auto: ".$auto2->obtener_motor();
echo "<br>Marca del segundo auto: ".$auto2->obtener_marca();
?>
<br>
<?php
echo "<br>Color del tercer auto: ".$auto3->obtener_color();
echo "<br>Motor del tercer auto: ".$auto3->obtener_motor();
echo "<br>Marca de tercer auto: ".$auto3->obtener_marca();
?>