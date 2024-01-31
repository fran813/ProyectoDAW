<?php
$bd = new mysqli($sql_host, $sql_usuario, $sql_pass, $sql_db);
if ($bd->connect_error) { die('Error de Conexion ('.$mysqli->connect_error.') '.$mysql->connect_error); }
mysqli_set_charset($bd,"utf8");

?>