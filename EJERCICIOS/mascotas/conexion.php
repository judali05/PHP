<?php

header("Content-Type: text/html;charset-utf-8");
$db = new mysqli('localhost', 'root', '','veterinaria');
$acentos = $db->query("SET NAMES 'utf8'");

?>