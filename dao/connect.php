<?php

$hostname = "localhost";
$bancodedados = "mural";
$usuario = "root";
$senha = "";

$query = new mysqli($hostname, $usuario, $senha, $bancodedados) or print(mysqli_error());
?>