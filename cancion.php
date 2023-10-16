<div class="col-sm-4">
    <h4>Agrega la canción</h4>
    <form method="post" action="controladorcancion.php">
    <input type="text" name="autor" placeholder="Autor" class="form-control">
    <input type="text" name="titulo" placeholder="Titulo" class="form-control">
    <input type="submit" value="Agregar canción" class="btn btn-outline-dark">
</form>
</div>
<?php
include "conexion.php";

$sql = "select cancion.nombre 'NOMBRE',
cancion.autor 'AUTOR',
genero.descripcion 'GENERO', genero.id 'ID'
from cancion join genero on
cancion.GENERO_ID = genero.id;";

$resultado = $conexion->query($sql);

if($resultado->num_rows >0){
    while($f = $resultado->fetch_assoc()){
        echo $f['NOMBRE']. " | ";
        echo $f['AUTOR']. " | ";
        echo $f['GENERO']. " ▶ ";
        echo "<hr>";
    }
}
?>

<form method="post" action="controladorcancion.php">
    <input type="text" name="autor" placeholder="Autor">
    <input type="text" name="nombre" placeholder="Nombre de la canción">
    <select name="genero_id">
        <?php
        $sql_genero = "select * from genero;";
        $res = $conexion->query($sql_genero);
        while($f = $res->fetch_assoc()){
            echo "<option value='". $f['ID']."'>"<$f['DESCRIPCION']."</option>";
        }
        ?>
        </select>
        <button type="submit">Guardar</button>
    </form>

<h3>Lista de canciones</h3>
<table class="table table-striped">
    <?php
    if($resultado->num_rows > 0){
        while($fila = $resultado->fetch_assoc()){
            echo "<tr>";
            echo "<tr>".$fila["autor"]."</td>";
            echo "<tr>".$fila["titulo"]."</td>";
            echo "<tr>".$fila["genero"]."</td>";
            echo "<tr>".$fila["fecha"]."</td>";
        } else {
            echo "No tienes canciones aún :(";
        }
    }
    ?>