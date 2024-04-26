<?php

include_once 'conectar.php';

$descripcion = $_POST['descripcion'];
$matricula = $_POST['matricula'];
$fechaingreso = $_POST['fechaingreso'];
$cantidadpasajeros = $_POST['cantidadpasajeros']; // Corregir nombre del campo
$anovehiculo = $_POST['añovehiculo']; // Corregir nombre del campo
$color = $_POST['color'];
$tipocombustible = $_POST['tipocombustible'];

$sqlinsert = "INSERT INTO vehiculo VALUES (0, '$descripcion', '$matricula', '$fechaingreso', '$cantidadpasajeros', '$anovehiculo', '$color', '$tipocombustible')";

if(mysqli_query($mysqli, $sqlinsert)) {
    header("Location: ./index.php");
    exit;
} else {
    echo "Error al ejecutar la consulta: " . mysqli_error($mysqli);
}

?>
