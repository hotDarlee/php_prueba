<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario vehiculo</title>
</head>


<style>

h1 {
            text-align: center;
            animation: fadeInDown 1s ease;
        }

        @keyframes fadeInDown {
            0% {
                opacity: 0;
                transform: translateY(-20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }




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

label {
    font-weight: bold;
}

input[type="text"],
input[type="date"],
textarea {
    width: calc(100% - 10px);
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #45a049;
}


table {
        width: 100%;
        border-collapse: collapse;
        border: 2px solid #5cb85c;
        background-color: #fff;
    }
    th, td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    th {
        background-color: #5cb85c;
        color: #fff;
    }
    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    tr:hover {
        background-color: #d9edf7;
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

</style>
<body>


<!-- Para buscar -->
<!-- 
<form action="consulta.php" method="POST">

    <label for="texto">Texto:</label>
<br><br>
    <input type="text" name="id" placeholder="buscar vehiculo">
    
    </select><br>
   
    <input type="submit" value="BUSCAR"><br><br> 
   
</form> -->


<!-- Formulario para rellenar  -->
    <br><br>

<form action="insertar.php" method="post">

<h2>Formulario de vehículos</h2>

<label for="descripcion">Descripción:</label>
<input type="text" id="descripcion" name="descripcion" maxlength="50"><br><br>

<label for="matricula">Matrícula:</label>
<input type="text" id="matricula" name="matricula" maxlength="10"><br><br>

<label for="fechaingreso">Fecha de ingreso:</label>
<input type="date" id="fechaingreso" name="fechaingreso"><br><br>

<label for="cantidadpasajero">Cantidad de pasajeros:</label>
<input type="number" id="cantidadpasajeros" name="cantidadpasajeros" min="1"><br><br>

<label for="anovehiculo">Año del vehículo:</label>
<input type="number" id="anovehiculo" name="anovehiculo" min="1900" max="9999"><br><br>

<label for="color">Color:</label>
<input type="text" id="color" name="color" maxlength="20"><br><br>

<label for="tipocombustible">Tipo de combustible:</label>
<select id="tipocombustible" name="tipocombustible">
    <option value="Gasolina">Gasolina</option>
    <option value="Diésel">Diésel</option>
    <option value="Eléctrico">Eléctrico</option>
    <option value="Híbrido">Híbrido</option>
</select><br><br>

<input type="submit" value="Enviar">
</form>


    <!-- editar vehiculo -->

    <h1>Editar vehiculo</h1>

    <form action="update.php" method="POST">
        <input type="text" name="id" placeholder="ID">
        <button type="submit" name="update">Editar</button>
    </form>

    <!-- tabla con inserts y para borrar -->

    <h1>Tabla vehiculos</h1>
    <table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Descripcion</th>
            <th>matricula</th>
            <th>fechaingreso</th>
            <th>cantidad pasajeros</th>
            <th>año vehiculo</th>
            <th>Color</th>
            <th>tipo combustible</th>
            <th>borrar</th>
        </tr>
    </thead>

    
        <?php
        include_once "conectar.php";

        $query = "SELECT * FROM vehiculo";
        $data = mysqli_query($mysqli, $query);
        $total = mysqli_num_rows($data);

        if ($total != 0) {
            while ($row = mysqli_fetch_assoc($data)) {
                echo "<tr>
                        <td>" . $row['id'] . "</td>
                        <td>" . $row['descripcion'] . "</td>
                        <td>" . $row['matricula'] . "</td>
                        <td>" . $row['fechaingreso'] . "</td>
                        <td>" . $row['cantidadpasajeros'] . "</td>
                        <td>" . $row['anovehiculo'] . "</td>
                        <td>" . $row['color'] . "</td>
                        <td>" . $row['tipocombustible'] ."</td>
                        <td> 
                        <a href= 'delete.php?rn=$row[id]'>Eliminar</td></tr>";  
                        }; 
                        };
?>

    </tbody>
</table>



    
</body>
</html>
