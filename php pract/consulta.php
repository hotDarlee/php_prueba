<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tabla de vehiculo</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f7f7f7;
        color: #333;
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
</style>
</head>
<body>

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
        </tr>
    </thead>
    <tbody>
        <?php
        include_once "conectar.php";

        $query = "SELECT * FROM noticias";
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
                <td>" . $row['tipocombustible'] . "</td>
              </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No se encontraron noticias.</td></tr>";
        }
        ?>
    </tbody>
</table>

</body>
</html>
