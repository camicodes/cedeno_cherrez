<?php
include "db.inc.php";

//obtener datos desde el formulario
$fecha = $_POST['date'];
$kilometraje = $_POST['kilometraje'];
$tipo= $_POST[''];
$taller= $_POST['name_taller'];
$mantenimiento= $_POST['costo_mantenimiento'];
$repuestos= $_POST['costo_repuestos'];
$observaciones= $_POST['mensaje'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO cc_carservice (fecha_mantenimiento, kilometraje, tipo_mantenimiento, nombre_taller, costo_mantenimiento, costo_repuestos, observaciones)
    VALUES ('$fecha', '$kilometraje', '$tipo', '$taller', '$mantenimiento','$repuestos', '$observaciones')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    echo "<link rel='stylesheet' type='text/css' href='assets\css\bootstrap.min.css'>";
    echo "<link rel='stylesheet' href='assets\css\estilos.css'>";
    echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'&amp;gt;>";
    echo "<br>";
    echo "<div class='text-center'>";
    echo '<a href="formulario.html"> <input type="button" value="Formulario" class="btn btn-default btn-primary mb-2"></a>'."\n";
    echo '<a href="refrescar.php"> <input type="button" value="Aplicación" class="btn btn-primary mb-2"></a>'."\n";
    echo "</div>";
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  
  $conn = null;