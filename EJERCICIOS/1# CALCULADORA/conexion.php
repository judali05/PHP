<?php
header("Content-Type: text/html;charset=utf-8");
$db = new mysql('localhost','root','','datos');
$acentos = $db->query("SET NAMES  'utf8'");
?>
