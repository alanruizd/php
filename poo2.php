<?php
class Persona{
    public $nombre;
    public $telefono;

    public function __construct($nomb, $tel){
        $this->nombre = $nomb;
        $this->telefono = $tel;
    }

    public function obtener_datos(){
        return "Nombre: ".$this->nombre." Telefono: ".$this->telefono;
    }
}
class Alumno extends Persona{
    private $grado;
    public $turno;

    public function __construct($nombre, $celular, $nivel, $turno) {
        $this->nombre = $nombre;
        $this->celular = $celular;
        $this->nivel = $nivel;
        $this->turno = $turno;
    }

public function obtener_datos(){
    return parent::obtener_datos()." Grado: ".$this->grado." Turno: ".$this->turno;
}
}

?>
<h3> Crear un objeto array de la clase alumno</h3>
<?php
$alumno1 = new Alumno("Camila", "0961123466", "Tercero - Nivel Medio", "Tarde");
$alumno2 = new Alumno("Ramon","0983899086","Segundo - Nivel Medio","Noche");
$alumnos[] = $alumno1;
$alumnos[] = $alumno2;

?>

<h3> Imprimir sus datos con foreach </h3>
<?php
foreach ($alumnos as $estudiante) {
echo "Nombre " . $estudiante->nombre . "<br>";
echo "Celular " . $estudiante->celular . "<br>";
echo "Nivel " . $estudiante->nivel . "<br>";
echo "Turno " . $estudiante->turno . "<br>";
echo "<hr>";
}
?>