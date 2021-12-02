<?php
include "db.inc.php";

//CREAMOS LA CONEXIÓN CON EL SERVIDOR QUE SE ALMACENARÁ EN $conexion
$conexion = mysqli_connect($servername, $username, $password, $dbname) or die("No se ha podido conectar con el servidor");

$sql = "SELECT * FROM cc_carservice";
$result = $conexion->query($sql);


echo "<table class='table table-bordered'>";
echo "<tr>";
echo "  <th> Id  </th>";
echo "  <th> Fecha de mantenimiento  </th>";
echo "  <th> Kilometraje </th>";
echo "  <th> Tipo de mantenimiento </th>";
echo "  <th> Costo total </th>";
echo "</tr>";
echo "</div>";

/* array asociativo */
while ($row = $result->fetch_array(MYSQLI_ASSOC)){
    echo "<tr>  <td>" .  $row["id"] ."</td> <td>" . $row["fecha_mantenimiento"] . "</td> <td>" . $row["kilometraje"] . "</td> <td>". $row["tipo_mantenimiento"] . "</td> <td>" . $row["costo_mantenimiento"] . "</td> </tr>";
}

echo "</table>";

$result->free();

echo "<link rel='stylesheet' type='text/css' href='assets\css\bootstrap.min.css'>";
echo "<link rel='stylesheet' href='assets\css\estilos.css'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'&amp;gt;>";
echo "<br>";
echo "<div class='text-center'>";
echo '<a href="index.html"> <input type="button" value="Home" class="btn btn-default btn-primary mb-2"></a>'."\n";
echo '<a href="formulario.html"> <input type="button" value="Formulario" class="btn btn-primary mb-2"></a>'."\n";
echo "</div>";

?>