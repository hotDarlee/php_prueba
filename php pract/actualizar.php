<?php

include_once 'conectar.php';

if(isset($_POST['update'])){
    
    $id = $_POST['id'];
    $descripcion = $_POST['descripcion'];
    $matricula = $_POST['matricula'];
    $fechaingreso = $_POST['fechaingreso'];
    $cantidadpasajeros = $_POST['cantidadpasajeros'];
    $anovehiculo = $_POST['anovehiculo'];
    $color = $_POST['color'];
    $tipocombustible = $_POST['tipocombustible'];

    // Consulta SQL para actualizar el registro
    $query = "UPDATE `vehiculo` SET descripcion='$descripcion', matricula='$matricula', fechaingreso='$fechaingreso', cantidadpasajeros='$cantidadpasajeros', anovehiculo='$anovehiculo', color='$color', tipocombustible='$tipocombustible' WHERE id='$id'";

    // Ejecutar la consulta
    if(mysqli_query($mysqli, $query)){
        
        header("Location: index.php?update=success");
        exit();
    } else {
        
        echo "Error al actualizar el registro: " . mysqli_error($mysqli);
    }
} else {
-
    header("Location: index.php?error=updatefailed");
    exit();
}

?>
