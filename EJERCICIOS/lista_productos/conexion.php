<?php

header("Content-Type: text/html;charset-utf-8");
$db = new mysqli('localhost', 'root', '','tienda');
$acentos = $db->query("SET NAMES 'utf8'");

?>