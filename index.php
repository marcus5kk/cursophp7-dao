<?php

require_once("config.php");

$sql = new Sql();

$usuarios = $sql->query("SELECT * FROm tb_usuarios");

$usuarios->execute();

echo json_encode($usuarios);


?>