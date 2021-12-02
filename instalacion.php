<?php
include "db.inc.php";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // sql to create table
  $sql = "CREATE TABLE cc_carservice (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    fecha_mantenimiento date,
    kilometraje INT(6) NOT NULL,
    tipo_mantenimiento boolean,
    nombre_taller VARCHAR(50) NOT NULL,
    costo_mantenimiento FLOAT(6,2) NOT NULL,
    costo_repuestos FLOAT(6,2) NOT NULL,
    observaciones VARCHAR(1024) NULL
  )";

echo "<div class='text-center'>";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "<br>";
  echo "Table cc_carservice created successfully";
} catch(PDOException $e) {
  echo "<br>";
  echo  $e->getMessage();
}
echo "</div>";

$conn = null;

echo "<link rel='stylesheet' type='text/css' href='assets\css\bootstrap.min.css'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no'>";
echo "<br>";
echo "<div class='text-center'>";
echo '<a href="index.html"> <input type="button" value="Home" class="btn btn-default btn-primary mb-2"></a>'."\n";
echo '<a href="refrescar.php"> <input type="button" value="Aplicación" class="btn btn-primary mb-2"></a>'."\n";
echo "</div>";
?>


