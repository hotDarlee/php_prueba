<?php


include_once 'conectar.php';

$id =$_GET['rn'];
$query = "DELETE FROM vehiculo Where id = '$id'";

$data=mysqli_query($mysqli, $query);
header("location: ./index.php?insert=success");

?>


