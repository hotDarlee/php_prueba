<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar vehiculo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            margin: 0 auto;
        }

        input[type="text"] {
            width: calc(100% - 10px);
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        button[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            width: 100%;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }

        h1{
        text-align: center;
        }
    </style>
</head>

<body>
<?php

include_once 'conectar.php';
$id = $_POST['id'];

$sql = "SELECT *FROM vehiculo WHERE id=$id;";

$result = mysqli_query($mysqli, $sql);
$resultcheck = mysqli_num_rows($result);

    if ($resultcheck > 0){
        $row = mysqli_fetch_assoc($result);
        $id = $row['id'];
        $descripcion = $row['descripcion'];
        $matricula = $row['matricula'];
        $fechaingreso = $row['fechaingreso'];
        $cantidadpasajeros = $row['cantidadpasajeros'];
        $anovehiculo = $row['anovehiculo'];
        $color = $row['color'];
        $tipocombustible = $row['tipocombustible'];
    }
    
?>




    <h1>Editar vehiculo</h1>

<form action="actualizar.php" method="POST">

    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <input type="text" name="descripcion" placeholder="descricion" value="<?php echo $descripcion; ?>" style="margin-bottom: 10px;"><br>
    <input type="text" name="matricula" placeholder="matricula" value="<?php echo $matricula; ?>" style="margin-bottom: 10px;"><br>
    <input type="date" name="fechaingreso" value="<?php echo $fechaingreso; ?>" style="margin-bottom: 10px;"><br>
    <input type="number" name="cantidadpasajeros" placeholder="Cantidad de pasajeros" value="<?php echo $cantidadpasajeros; ?>" style="margin-bottom: 10px;"><br>
    <input type="number" name="anovehiculo" placeholder="Anovehiculo"  min="1900" max="9999" value="<?php echo $anovehiculo ; ?>" style="margin-bottom: 10px;"><br>
    <input type="text" name="color" placeholder="color" value="<?php echo $color; ?>" style="margin-bottom: 10px;"><br>
    <input type="text" name="tipocombustible" placeholder="Tipo de combustible" value="<?php echo $tipocombustible; ?>" style="margin-bottom: 10px;"><br>
    
    <button type="submit" name="update">Editar</button>
    
</form>

</body>
</html>
