<?php

$pdo = new PDO("mysql:dbname=test;host=localhost", "root", "");

$sql = $pdo->query("SELECT * FROM usuarios");

$dados = $sql->fetchAll(PDO::FETCH_ASSOC);

print_r($dados);



// OU

$db_name = 'test';
$db_host = 'localhost';
$db_user = "root";
$db_password = '';


$pdo1 = new PDO("mysql:dbname=" . $db_name . ";host=" . $db_host, $db_user, $db_password);

$sql2 = $pdo->query("SELECT * FROM usuarios");
$dados2 = $sql->fetchAll(PDO::FETCH_ASSOC);

print_r($dados2);
