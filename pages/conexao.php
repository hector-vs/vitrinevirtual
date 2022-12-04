<?php

$usuario = 'root';
$senha = '';
$database = 'loginutf';
$host = 'localhost';


$mysqli = new PDO("mysql:host=$host;dbname=$database", $usuario, $senha, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

$mysqli->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
