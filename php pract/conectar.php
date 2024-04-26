<?php

$mysqli = new mysqli("localhost", "root", "", "practica_php");
if ($mysqli->connect_errno) {
    echo "fallo al conectar a mysql:
(". $mysqli->connect_error.")" . $mysqli->connect_error;
}



?>